<h2>Enquiry Form</h2>

<table border="1" cellpadding="8" cellspacing="0" width="100%" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 14px;">
    <tr>
        <th align="left" style="background: #f2f2f2; width: 150px;">Name</th>
        <td>{{ $data['name'] }}</td>
    </tr>
    <tr>
        <th align="left" style="background: #f2f2f2;">Email</th>
        <td>{{ $data['email'] }}</td>
    </tr>
    <tr>
        <th align="left" style="background: #f2f2f2;">Subject</th>
        <td>{{ $data['subject'] }}</td>
    </tr>
    <tr>
        <th align="left" style="background: #f2f2f2;">Message</th>
        <td>{{ $data['message'] }}</td>
    </tr>
</table>