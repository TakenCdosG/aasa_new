<table width="95%" border="0" cellspacing="0" cellpadding="1" align="center" bgcolor="#006699" style="font-family:verdana,arial,helvetica;font-size:small">
    <tbody>
        <tr>
            <td>
                <table width="100%" border="0" cellspacing="0" cellpadding="5" align="center" bgcolor="#FFFFFF" style="font-family:verdana,arial,helvetica;font-size:small">
                    <tbody>
                        <tr valign="top">
                            <td>
                                <table width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                    <tbody>
                                        <tr>
                                            <td>
                                            </td>
                                            <td width="98%">
                                                <div style="padding-left:1em">
                                                    <span style="font-size:large"><?php echo $params["site_name"]; ?> Meeting: New Free Membership Application Request - From <?php echo $params["node_title"]; ?></span><br>
                                                </div>
                                            </td>
                                            <td nowrap="" width="121">
                                                <img src="https://aasa1.org/sites/all/themes/aasa/img/main-logo.jpg" width="121" height="118"/> <br>                
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td width="98%">
                                                <p>
                                                    A Free membership application has been received. Click here to review the application: <a href="<?php echo $params["user_url"]; ?>"><?php echo $params["email_address"]; ?></a>
                                                </p>
                                            </td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <tr valign="top">
                            <td>
                                <table cellpadding="4" cellspacing="0" border="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" bgcolor="#007490" style="color:white">
                                                <b>Free Membership Application Request Summary:</b>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <table width="100%" cellspacing="0" cellpadding="0" width="100%" style="font-family:verdana,arial,helvetica;font-size:small">
                                                    <tbody>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Name: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_first_name"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>E-mail address: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["email_address"]; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Job Title: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_position_title"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Region: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_region"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Current Position: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_current_position"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Years in Healthcare: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_years_in_healthcare"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Highest Edu Degree: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_highest_edu_degree"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Certifications: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_certifications"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>MGMA Member: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_mgma_member"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>APA Member: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_apa_member"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>University: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_institution"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Medical School: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_medical_school"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Medical School Website: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_medical_school_website"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Department: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_department"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Department Website: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_department_website"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Division: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_division"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Specialties: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_specialties"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Transplant Specialties: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_transplant_specialties"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Address Line 1: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_address_line_1"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Address Line 2: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_address_line_2"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>City: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_city"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>State/Province: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_state"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Zip: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_zip"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Work phone: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_office_telephone"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Ext: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_ext"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Fax: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_fax"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                <b>Alt. phone: </b>
                                                            </td>
                                                            <td width="98%">
                                                                <?php echo $params["field_mobile_telephone"]['und'][0]['value']; ?>             
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td nowrap="">
                                                                &nbsp;
                                                            </td>
                                                            <td>      
                                                                &nbsp;
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <hr noshade="" size="1"><br>
                                                <p>
                                                    Thank you, <br /><br />
                                                    <?php echo $params["site_name"]; ?>
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>