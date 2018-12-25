<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact email</title>
</head>
<body>
<div style="background-color: #fafafa;">
    <div>
        <p>We have received one contact message via "Join our consultants network now" form on website <a href="http://Brickmate.com" target="_blank" title="Brickmate.com">Brickmate.com</a></p>
        
        <p>Please find details below:</p>

        <table width="600px;" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="150">Name</td>
                <td>
                    {{ @$data["name"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Email</td>
                <td>
                    {{ @$data["email"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Phone</td>
                <td>
                    {{ @$data["phone"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Country</td>
                <td>
                    {{ @$data["country"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Technical consultant</td>
                <td>
                    {{ @$data["technical_consultant"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Requirement details</td>
                <td>
                    {{ @$data["requirement_details"] }}
                </td>
            </tr>
        </table>

        <p>Thank you,</p>
    </div>
</div>
</body>
</html>