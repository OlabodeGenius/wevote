
<!DOCTYPE html>
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<style type="text/css">
/* FONTS */
@import url('https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i');
/* CLIENT-SPECIFIC STYLES */
body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
img { -ms-interpolation-mode: bicubic; }
/* RESET STYLES */
img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
table { border-collapse: collapse !important; }
body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; }
/* iOS BLUE LINKS */
a[x-apple-data-detectors] {
  color: inherit !important;
  text-decoration: none !important;
  font-size: inherit !important;
  font-family: inherit !important;
  font-weight: inherit !important;
  line-height: inherit !important;
}
/* MOBILE STYLES */
@media screen and (max-width:600px){
  h1 {
    font-size: 32px !important;
    line-height: 32px !important;
  }
}
/* ANDROID CENTER FIX */
div[style*="margin: 16px 0;"] { margin: 0 !important; }
</style>
</head>
<body style="background-color: #f3f5f7; margin: 0 !important; padding: 0 !important;">

<!-- HIDDEN PREHEADER TEXT -->
<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Poppins', sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;">
We're thrilled to have you here! Get ready to dive into your new account.
</div>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
<!-- LOGO -->
<tr>
<td align="center">
  <!--[if (gte mso 9)|(IE)]>
  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
    <tr>
      <td align="center" valign="top" width="600">
  <![endif]-->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
    <tr>
      <td align="left" valign="top" style="padding: 40px 10px 40px 10px;">
        <a href="#" target="_blank" style="text-decoration: none;">
          <span style="display: block; font-family: 'Poppins', sans-serif; color: #1e88e5; font-size: 36px;" border="0"><b>Fab</b> admin</span>
        </a>
      </td>
      <td align="right" valign="middle" style="padding: 40px 10px 40px 10px;">
        <p style="margin: 0;font-family: 'Poppins', sans-serif;">
          <a href="#" target="_blank" style="color: #3b5998; font-weight: 700; text-decoration: none;">Facebook</a> -
          <a href="#" target="_blank" style="color: #1da1f2; font-weight: 700; text-decoration: none;">Twitter</a> -
          <a href="#" target="_blank" style="color: #dd4b39; font-weight: 700; text-decoration: none;">Google+</a>
        </p>
      </td>
    </tr>
  </table>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
</td>
</tr>
<!-- HERO -->
<tr>
<td align="center" style="padding: 0px 10px 0px 10px;">
  <!--[if (gte mso 9)|(IE)]>
  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
    <tr>
      <td align="center" valign="top" width="600">
  <![endif]-->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
    <tr>
      <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Poppins', sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 2px; line-height: 48px;">
        <h1 style="font-size: 36px; font-weight: 600; margin: 0;">Hi! {{$user['first_name']}} {{$user['last_name']}}</h1>
      </td>
    </tr>
  </table>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
</td>
</tr>
<!-- COPY BLOCK -->
<tr>
<td align="center" style="padding: 0px 10px 0px 10px;">
  <!--[if (gte mso 9)|(IE)]>
  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
    <tr>
      <td align="center" valign="top" width="600">
  <![endif]-->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
    <!-- COPY -->
    <tr>
      <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: 'Poppins', sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
        <p style="margin: 0;">We're excited to have you get started. First, you need to confirm your account. Just press the button below.</p>
      </td>
    </tr>
    <!-- BULLETPROOF BUTTON -->
    <tr>
      <td bgcolor="#ffffff" align="left">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td bgcolor="#ffffff" align="center" style="padding: 20px 30px 30px 30px;">
              <table border="0" cellspacing="0" cellpadding="0">
                <td style="border-radius: 3px;" bgcolor="#7460ee" align="center"><a href="{{ url('account/activation', $user->activation_token) }}" target="_blank" style="font-size: 18px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; color: #ffffff; text-decoration: none; padding: 12px 50px; border-radius: 2px; border: 1px solid #7460ee; display: inline-block;">Confirm Account</a></td>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
    <!-- COPY -->
    <tr>
      <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 0px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
        <p style="margin: 0;">If that doesn't work, copy and paste the following link in your browser:</p>
      </td>
    </tr>
    <!-- COPY -->
    <tr>
      <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 12px; font-weight: 400; line-height: 25px;">
        <p style="margin: 0;"><a href="{{url('account/activation', $user->activation_token)}}" target="_blank" style="color: #26c6da;">{{url('account/activate', $user->activation_token)}} </a></p>
      </td>
    </tr>
    <!-- COPY -->
    <tr>
      <td bgcolor="#ffffff" align="left" style="padding: 0px 30px 20px 30px; color: #666666; font-family: &apos;Lato&apos;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: 400; line-height: 25px;">
        <p style="margin: 0;">If you have any questions, just reply to this email info@workload.com.ng —we're always happy to help out.</p>
      </td>
    </tr>
    <!-- COPY -->
  </table>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
</td>
</tr>
<!-- SUPPORT CALLOUT -->
<!-- FOOTER -->
<tr>
<td align="center" style="padding: 10px 10px 50px 10px;">
  <!--[if (gte mso 9)|(IE)]>
  <table align="center" border="0" cellspacing="0" cellpadding="0" width="600">
    <tr>
      <td align="center" valign="top" width="600">
  <![endif]-->
  <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
    <!-- COPYRIGHT -->
    <tr>
      <td align="center" style="padding: 30px 30px 30px 30px; color: #333333; font-family: 'Poppins', sans-serif; font-size: 12px; font-weight: 400; line-height: 18px;">
        <p style="margin: 0;">Copyright © 2018 Workload. All rights reserved.</p>
      </td>
    </tr>
  </table>
  <!--[if (gte mso 9)|(IE)]>
  </td>
  </tr>
  </table>
  <![endif]-->
</td>
</tr>
</table>

</body>

</html>

© 2018 GitHub, Inc.
Terms
Privacy
Security
Status
Help

Contact GitHub
Pricing
API
Training
Blog
About

Press h to open a hovercard with more details.
