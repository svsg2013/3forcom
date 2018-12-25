<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit your RFP</title>
</head>
<body>
<div style="background-color: #fafafa;">
    <div>
        <p>We have received one contact message via "Submit your RFP" form on website <a href="http://brickmate.kr" target="_blank" title="brickmate.kr">brickmate.kr</a></p>
        
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
                <td width="150">Country</td>
                <td>
                    {{ @$data["country"] }}
                </td>
            </tr>
            <tr>
                <td width="150">Solutions</td>
                <td>
                    @if(isset($data["solutions"]))
                        @foreach(json_decode($data["solutions"]) as $solution)
                            {{ $solution }} <br>
                        @endforeach
                    @endif
                </td>
            </tr>
            <tr>
                <td width="150">Describe Requirement</td>
                <td>
                    {{ @$data["describe_requirement"] }}
                </td>
            </tr>
        </table>

        <p>Thank you,</p>
    </div>
</div>
</body>
</html>