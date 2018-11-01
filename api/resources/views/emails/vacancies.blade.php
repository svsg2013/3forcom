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
        <p>We have received one contact message via "Opening Vacancies" form on website <a href="http://3forcom.com" target="_blank" title="3forcom.com">3forcom.com</a></p>
        
        <p>Please find details below:</p>

        <table width="600px;" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td width="150">First name</td>
                <td>
                    {{ @$data["first_name"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Last name</td>
                <td>
                    {{ @$data["last_name"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Passion</td>
                <td>
                    {{ @$data["passion"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Phone</td>
                <td>
                    {{ @$data["phone"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Email</td>
                <td>
                    {{ @$data["email"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Message</td>
                <td>
                    {{ @$data["message"] }}
                </td>
            </tr>
        </table>

        <p>Thank you,</p>
    </div>
</div>
</body>
</html>