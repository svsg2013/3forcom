<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send us your request</title>
</head>
<body>
<div style="background-color: #fafafa;">
    <div>
        <p>We have received one received message via "Send Us Your Request" form on website <a href="http://3forcom.com" target="_blank" title="3forcom.com">3forcom.com</a></p>
        
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
                <td width="150">Company</td>
                <td>
                    {{ @$data["company"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Team size</td>
                <td>
                    {{ @$data["team_size"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Product description</td>
                <td>
                    {{ @$data["product_description"] }}
                </td>
            </tr>

            <tr>
                <td width="150">Duration</td>
                <td>
                    {{ @$data["duration"] }}
                </td>
            </tr>
        </table>

        <p>Thank you,</p>
    </div>
</div>
</body>
</html>