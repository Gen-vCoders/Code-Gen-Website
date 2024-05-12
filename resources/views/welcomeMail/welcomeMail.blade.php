<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome Mail</title>
</head>

<body>
    <tr>
        <td class="email-body" width="570" cellpadding="0" cellspacing="0">
            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0"
                role="presentation">
                <!-- Body content -->
                <tr>
                    <td class="content-cell">
                        <div class="f-fallback">
                            <h1>Hi, Good day!</h1>
                            <p>{{ $formData['message'] }}</p>

                            <p>BY: </p><span>{{ $formData['name'] }}</span>
                            <p>{{ $formData['phone'] }}</p>
                            {{-- <p>Welcome to {{ config('config.companyName') }}! Thank you for being a part of our company.
                                Hope we are going to have a good business relationship together! Have a nice day.</p>
                            <p>Thanks,
                                <br>Surya & Kuldeep Company<br />
                                <p>9898989898</p>
                            </p> --}}

                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</body>

</html>
