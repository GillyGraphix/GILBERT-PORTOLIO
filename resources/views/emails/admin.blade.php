<!-- resources/views/emails/admin.blade.php -->
<div style="background-color: #f4f4f4; padding: 40px 10px; width: 100%; font-family: 'Segoe UI', Helvetica, Arial, sans-serif;">
    
    <!-- Email Container -->
    <div style="max-width: 600px; margin: auto; background-color: #1a120b; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.2); border: 1px solid chocolate; border-top: 6px solid #ff7a00;">
        
        <!-- Header Section -->
        <div style="padding: 30px 20px; text-align: center; border-bottom: 1px solid rgba(210, 105, 30, 0.3);">
            <h2 style="margin: 0; color: #f4c95d; font-size: 24px;">🔥 New Portfolio Inquiry!</h2>
        </div>
        
        <!-- Body Section -->
        <div style="padding: 30px; color: #cbd5e1; line-height: 1.6; font-size: 16px;">
            <p>You have received a new message from your portfolio website.</p>
            
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.05); color: #ff7a00; width: 120px;"><strong>Client Name:</strong></td>
                    <td style="padding: 12px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.05); color: #e5e7eb;">{{ $jina }}</td>
                </tr>
                <tr>
                    <td style="padding: 12px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.05); color: #ff7a00;"><strong>Client Email:</strong></td>
                    <td style="padding: 12px 0; border-bottom: 1px solid rgba(255, 255, 255, 0.05);">
                        <a href="mailto:{{ $email }}" style="color: #00d1b2; text-decoration: none; font-weight: bold;">{{ $email }}</a>
                    </td>
                </tr>
            </table>
            
            <p style="margin-top: 30px; color: #f4c95d;"><strong>Message Content:</strong></p>
            
            <!-- Message Block -->
            <div style="background-color: #241910; padding: 20px; border-radius: 10px; border-left: 4px solid #00d1b2; font-style: italic; color: #d1d5db;">
                {!! nl2br(e($ujumbe)) !!}
            </div>
            
            <!-- Call to Action (Reply Button) -->
            <div style="margin-top: 30px; text-align: center;">
                <a href="mailto:{{ $email }}" style="display: inline-block; padding: 12px 25px; background-color: #00d1b2; color: #1a120b; text-decoration: none; font-weight: bold; border-radius: 30px; font-size: 14px;">Reply to {{ $jina }}</a>
            </div>
        </div>

        <!-- Footer Section -->
        <div style="background-color: #110c07; padding: 20px; text-align: center; font-size: 12px; color: #888888; border-top: 1px solid rgba(255, 122, 0, 0.2);">
            <p style="margin: 0;">Sent automatically from Gilbert Portfolio System.</p>
        </div>
        
    </div>
</div>