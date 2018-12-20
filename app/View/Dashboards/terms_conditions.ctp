<?php

foreach ($view_result as $result) { 
    $name = ucwords($result['verify_reference']['person_name']);
    $personal_name = ucwords($result['register']['first_name'] . " " . $result['register']['last_name']);
    $ref_id = $result['verify_reference']['reference_id'];
    $date = date('d-M-Y');
    $username = $result['verify_reference']['username'];
    $password = $result['verify_reference']['password'];
    $img = $result['verify_reference']['sign'];
}
?>

<!doctype html>
<html lang="en">
    <body>
        <table style="background-color:#eee; padding: 4%;">
            <tr>
                <td><img src="<?php echo DOMAIN_NAME ?>img/co-logo.png" style="max-width: 200px; width: 100%;"></td>
            </tr>
            <tr>
                <td>
                    <p>Reference Verification</p><br/><br/>
                    <p>Dear <?php echo $name; ?></p><br/>
                    <p style="line-height: 24px;">I <?php echo $personal_name; ?> have listed you as the previous employer.This signed form authorizes the release of information regarding my employment with you. Any other information you can provide that would help in the consideration of employment would also be appreciated.I would be very pleased if you could take the time to fill out a brief questionnaire that would help me securely store your information. Please login to <b><a href="https://mycareerdashboard.com/industry_index.html">https://mycareerdashboard.com/industry_index.html</a></b> with username <b><?php echo $username ?></b>, Reference Id <b><?php echo $ref_id ?></b> and password <b><?php echo $password ?></b></p><br/>
                    <p>Below is a list of question that will be on the questionnaire</p><br/>
                    <p>Attendance/Punctuality</p><br/>
                    <p>Quality of work</p><br/>
                    <p>Ability to work well with others</p><br/>
                    <p>Reason for leaving</p><br/>
                    <p>Would you re-hire this applicant?</p><br/>
                    <p>Salary</p><br/>
                    <p>Team Player</p><br/>
                    <p>Unique Skills</p><br/>
                    <p>Strengths</p><br/>
                    <p>Weaknesses</p><br/>
                    <p>Attendance Record</p><br/>
                    <p>If I was reprimanded</p><br/>
                    <p>Additional Comments</p><br/><br/>
                    <p>Title</p><br/><br/>
                    <p>Signature </p>
                    <p><img src="<?php echo DOMAIN_NAME ?><?php echo $img; ?>" style="max-width: 200px; width: 100%;"></p><br/>
                    <p>Date: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $date ?></p><br/>
                </td>
            </tr>
        </table>
    </body>
</html>
