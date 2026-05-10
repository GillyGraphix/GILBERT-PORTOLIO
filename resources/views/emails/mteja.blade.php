<!-- resources/views/emails/mteja.blade.php -->
<div style="background-color: #f4f4f4; padding: 40px 10px; width: 100%; font-family: 'Segoe UI', Helvetica, Arial, sans-serif;">
    
    <!-- Email Container -->
    <div style="max-width: 600px; margin: auto; background-color: #1a120b; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); border: 1px solid chocolate; border-top: 6px solid #f4c95d;">
        
        <!-- Header Section -->
        <div style="padding: 30px 20px; text-align: center; border-bottom: 1px solid rgba(210, 105, 30, 0.3);">
            <h2 style="margin: 0; color: #00d1b2; font-size: 26px; letter-spacing: 0.5px;">Message Received!</h2>
            <p style="margin: 10px 0 0 0; color: chocolate; font-size: 14px; text-transform: uppercase; letter-spacing: 2px;">Gilbert Portfolio</p>
        </div>
        
        <!-- Body Section -->
        <div style="padding: 35px 30px; color: #e5e7eb; line-height: 1.7; font-size: 16px;">
            <p style="margin-top: 0;">Hi <strong style="color: #f4c95d;">{{ $jina }}</strong>,</p>
            
            <p style="color: #cbd5e1;">This is an automated confirmation that I have successfully received your message via my portfolio website.</p>
            
            <p style="color: #cbd5e1;">Thank you for reaching out! I will review your inquiry and get back to you as soon as possible.</p>
            
            <p style="margin-top: 35px; font-size: 14px; color: #ff7a00; font-weight: bold; text-transform: uppercase; letter-spacing: 1px;">Here is a copy of your message:</p>
            
            <!-- Message Block -->
            <div style="background-color: #241910; padding: 20px; border-radius: 10px; border-left: 4px solid #00d1b2; font-style: italic; color: #d1d5db; margin-top: 10px;">
                {!! nl2br(e($ujumbe)) !!}
            </div>
            
            <p style="margin-top: 40px; color: #cbd5e1;">
                Best regards,<br>
                <strong style="color: #f4c95d; font-size: 18px; line-height: 2;">Gilbert Amani</strong><br>
                <span style="font-size: 14px; color: #00d1b2;">Software Developer & Designer</span>
            </p>
        </div>
        
        <!-- Footer Section -->
        <div style="background-color: #110c07; padding: 20px; text-align: center; font-size: 12px; color: #888888; border-top: 1px solid rgba(255, 122, 0, 0.2);">
            <p style="margin: 0;">&copy; {{ date('Y') }} Gilbert Amani. All rights reserved.</p>
            <p style="margin: 5px 0 0 0;">Moshi-Kilimanjaro, Tanzania</p>
        </div>
        
    </div>
</div>