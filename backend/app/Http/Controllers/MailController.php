<?php
namespace App\Http\Controllers;

use App\Mail\MailNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request data
        $request->validate([
            'recipient_email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        // Get the input data from the request
        $recipientEmail = $request->input('recipient_email');
        $subject = $request->input('subject');
        $message = $request->input('message');

        try {
            // Send the email
            Mail::to($recipientEmail)->send(new MailNotify($subject, $message));

            // Email sent successfully
            return response()->json(['message' => 'Email sent successfully'], 200);
        } catch (\Exception $e) {
            // Error occurred while sending the email
            return response()->json(['message' => 'Error sending email', 'error' => $e->getMessage()], 500);
        }
    }
}
