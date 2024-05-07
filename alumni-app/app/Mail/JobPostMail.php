<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class JobPostMail extends Mailable
{
    use Queueable, SerializesModels;

    public $alumnis;
    /**
     * Create a new message instance.
     *
     * @return void
     */
   

    public function __construct(array $alumnis)
    {
      
        $this->alumnis = $alumnis;
        
    }


    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
   

//     public function build()
//     {
//         return $this->view('alumnis.job')
//                     ->subject('New Job Alert')
//                     ->with('alumnis', $this->alumnis);
                  
//    }

public function build()
    {
        $htmlContent = "
        <div style='font-family: Arial, sans-serif;'>
            <h1 style='color: #4A90E2; text-align: center;'>Job Alerts</h1>
            <p style='font-size: 16px; color: #555;'>
                Make use of the job opportunities posted by your alumni. We encourage you to explore these roles and apply if you find something that fits your career goals. Good luck!
            </p>
            <h2 style='color: #4A90E2;'> Role: {$this->alumnis['role']}</h2>
            <p><strong>Company Name:</strong> {$this->alumnis['company_name']}</p>
            <p><strong>Location:</strong> {$this->alumnis['location']}</p>
            <p><strong>Batch:</strong> {$this->alumnis['batch']}</p>
            <p><strong>Description:</strong> {$this->alumnis['job_description']}</p>
        </div>
    ";

        return $this->subject('New Job Alert')
                    ->html($htmlContent);
    }
    /*
    
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
