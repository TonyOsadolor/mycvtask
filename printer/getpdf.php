<?php

$fullnames = "Ighiwiyisi Anthony Osadolor";

//if(isset('printPDF')){
    //error_reporting(E_ALL & ~E_NOTICE);
    require_once('tcpdf.php');
    $obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
    $obj_pdf->SetCreator(PDF_CREATOR);
    $obj_pdf->SetTitle($fullnames);
    $obj_pdf->SetHeaderData('', '', PDF_HEADER_TITLE, PDF_HEADER_STRING);
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
    $obj_pdf->setHeaderFont(array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
    $obj_pdf->SetDefaultMonospacedFont('helvetica');
    $obj_pdf->setFooterMargin(PDF_MARGIN_FOOTER);
    $obj_pdf->SetMargins(PDF_MARGIN_LEFT, '5', PDF_MARGIN_RIGHT);
    $obj_pdf->setPrintHeader(false);
    $obj_pdf->setPrintFooter(false);
    $obj_pdf->SetAutoPageBreak(TRUE, 10);
    $obj_pdf->SetFont('helvetica', '', 12);
    $obj_pdf->AddPage();
    
    $content = '<h2 style="text-align:center;font-size:20px;">Ighiwiyisi Anthony Osadolor</h2>';
    //$content = '<h5 style="text-align:center;"></h5>';
    
    $content .='<h5 style="text-align:center;">1, Anthony Hayble’s Crescent, Off R.C.C., Benin-Agbor Road, Ikhueniro, Benin City, Edo
State.</h5><p style="text-align:center;">tonyentertain@gmail.com, imasuen2tony@yahoo.com / <a style="color:black;text-decoration:none;" href="tel:09033987418">09033987418</a>, <a style="color:black;text-decoration:none;">08026627552</a></p><hr style="border:4px solid black;"><p style="font-weight:bold;text-align:center;">Curriculum Vitae </p><p style="text-align: justify;">Dedicated, Patient and Focused, young adventurous Programmer, ready to touch the world.
Believe the little act of kindness builds the most valued relationship. Simplicity is the Key to a
Happy Life.</p>

<h4 style="text-decoration:underline;">Work Experience:</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Backend (PHP) Developer at Zuri Training, Remotely</b> (February, 2021 - July, 2021)  - <i> Joined a Project Team that built a Platform that helps to monitor Children Vaccination and Preferred Hospitals to visit for Vaccination.</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Web Developer at Taylors Hair Nigeria, Lagos State</b> (November, 2019 - Present)  - <i> In charge of the general maintenance of the Company\'s Offical Website.</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Web Developer at Nigeria Association of Computing Students (NACOS) South-South Zone</b> (October, 2018 - Present)  - <i> Built and in charge of the general maintenance the South South Zonal Registration Website.</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Computer Operator at Aniclature Nigeria, Benin City</b> (February, 2017 - May, 2017)  - <i> Served as the Supervisor to Aniclature Nigeria. Basically, taking care of the Shop.</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Graphic Designer at Elvicop Computers, Benin City</b> (June, 2015 - December, 2016)  - <i> Served as the Graphic Designer for Elvicop Computers, to Design, Edit and Print Flex Banners, SAV, and Logos for the Company and Clients.</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Supervisor at OGB Cyber Café, Benin City.</b> (2007 - 2010)  - <i> Served as the Supervisor to OGB Cyber Café, and later Managed a new Extension, where the Shop grew excellently well.</i></li></ol>


<h4 style="text-decoration:underline;">Educational Background:</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Higher National Diploma of Computer Science from Heritage Polytechnic, Ekot</b> (2018 - 2021)  - <i> Equivalent (Bachelor of Computer Science).</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Ordinary National Diploma of Computer Science from Shaka Polytechnic, Benin City</b> (2015 - 2018)  - <i></i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Senior School Certificate Examination (NECO) from Supreme Group of Schools, Benin City</b> (2010 - 2013)  - <i> Senior Secondary School Certificate Examination (SSCE) organized by the National Examination Countil (NECO).</i></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>First School Leaving Certificate from Simbridge Group of Schools, Benin City</b> (2000 - 2004)  - <i> First School Leaving Certificate (Common Entrace) organized by Ministry of Education, Edo State.</i></li></ol>

<h4 style="text-decoration:underline;">Volunteer Experience:</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b><i>Nigeria Association of Computing Students, NACOS (November 2018 – Present)</i></b><ul><li>Zonal Coordinator, South-South Zone, November 2018 – 2021.</li><li> State ICT Director, Edo State, July 2018 – November 2018.</li><li>President Local Chapter [NACOSS Shaka Poly], June 2018 – August 2019.</li></ul></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b><i>Student Union Government, SUG Shaka Polytechnic – (Affiliated to Heritage Polytechnic, Ekot) (2019)</i></b><ul><li>President, SUG2019: Era of Dominion.</li></ul></li><br><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b><i>Student Union Government, SUG Shaka Polytechnic (2018)</i></b><ul><li>Director, Internet and Library, SUG2018: Era of A New Dawn.</li></ul></li></ol>


<h4 style="text-decoration:underline;">Languages:</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>English (native)</b></li></ol>


<h4 style="text-decoration:underline;">Membership / Affiliations </h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Nigeria Association of Computing Students (NACOS)</b> 2017 – Present  - <i> Formerly known as Nigeria Association of Computer Science Students.</i></li><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>DoxaCares Foundation (DoXaCares)</b> 2019 – Present.  - <i> A Charity Organization</i></li></ol>


<h4 style="text-decoration:underline;">PERSONAL INTERESTS</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><i> Adventure, Learning, Listening to Music, Learning to Code & Helping others solve tech
related issues.</i></li></ol>


<h4 style="text-decoration:underline;">REFEREE:</h4>
<!-- Body -->
<ol><li style="padding: 5px;margin-bottom:5px;text-align: justify;"><b>Mrs. Hayble Joy Eru</b><br>Edo State Education Board <br>
0806775442</li></ol>';

    $obj_pdf->writeHTML($content);
    
    $obj_pdf->Output('TestPDF', 'I');
//}

?>