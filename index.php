<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title>ITS Staff Links</title>
    <style type="text/css">
        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -webkit-font-smoothing: antialiased;
        }

        html {
            width: 100%;
        }

        body {
            font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
            width: 100%;
            margin: 0 !important;
        }

        body > h1 {
            text-align: center;
            margin-bottom: 0;
            font-size: 3em;
            color: #3a3a3a;
        }

        body > p {
            text-align: center;
            margin-top: .5em;
            color: #555;
        }

        footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #DFD29D;
        }

        footer > a {
            color: #fcd116;
            font-weight: bold;
            font-size: 1.5em;
            text-decoration: none;
            position: fixed;
            padding-bottom: .5em;
            bottom: 2em;
            left: 1.5em;
        }

        footer > p {
            padding-left: 1em;
            padding-right: 1em;
            padding-bottom: 0;
            color: #4A4C92;
        }

        #copyright {
            bottom: .5em;
            left: 2em;
            padding-top: .25em;
        }

        #logo {
            height: 100px;
            padding-bottom: .25em;
        }

        #disclaimer {
            bottom: .7em;
            left: 2em;
        }

        ul.tools {
            width: 100%;
            max-width: 1024px;
            margin: 0 auto;
            padding: 0 1rem;
        }

        ul.tools li {
            width: 100%;
            max-width: 50%;
            display: block;
            list-style-type: none;
            padding: 0.5rem;
            float: left;
        }

        @media (max-width: 800px) {
            ul.tools li {
                max-width: 100%;
                float: none;
            }
        }

        ul.tools li a {
            border: 2px solid #d41243;
            display: block;
            padding: 1rem;
            color: #000;
            text-decoration: none;
        }

        ul.tools li a span.title {
            display: block;
            font-size: 1.5rem;
        }

        ul.tools li a span.description {
            display: block;
            font-size: 0.75rem;
        }

        ul.tools li a.red {
            border-color: #A81933;
        }

        ul.tools li a.gold {
            border-color: #D2C694;
        }

        ul.tools li a.black {
            border-color: #000000;
        }

        ul.tools li a.gray {
            border-color: #909090;
        }

        ul.tools li a span.title {
            display: block;
            font-size: 1.5rem;
        }

        ul.tools li a span.description {
            display: block;
            font-size: 0.75rem;
        }

        #logo {
            align-content: center;
        }

    </style>
</head>
<body>
<h1>
    <a href="http://its.sdsu.edu" target="_blank">
        <img id="logo" src="./its_logo.png" alt="ITS Logo">
    </a>
</h1>
<p><span style="font-style: italic;">Useful Links for SDSU ITS Staff Members</span></p>
<ul class="tools">
    <li>
        <a href="https://blackboard.sdsu.edu/" class="red">
            <span class="title">Blackboard</span>
            <span class="description">Learn Online</span>
        </a>
    </li>
    <li>
        <a href="https://sunspot.sdsu.edu/schedule/search" class="red">
            <span class="title">Course Schedule</span>
            <span class="description">&nbsp;</span>
        </a>
    </li>
    <li>
        <a href="https://phonebook.sdsu.edu/" class="red">
            <span class="title">Phone Book</span>
            <span class="description">Contact Information for all SDSU Staff and Faculty</span>
        </a>
    </li>
    <li>
        <a href="search.php" class="gold">
            <span class="title">Digitization Tools</span>
            <span class="description">Intake Form, Search Tools, etc.</span>
        </a>
    </li>
    <li>
        <a href="http://morden.sdsu.edu/" class="gold">
            <span class="title">Morden</span>
            <span class="description">WebApp Listing</span>
        </a>
    </li>
    <li>
        <a href="https://sdsu-its.desk.com/agent" class="black">
            <span class="title">Desk.com</span>
            <span class="description">Support Tickets</span>
        </a>
    </li>
    <li>
        <a href="https://secure.acuityscheduling.com/appointments.php" class="black">
            <span class="title">Acuity Scheduling</span>
            <span class="description">FIT Center Appointment Scheduling</span>
        </a>
    </li>
    <li>
        <a href="https://drive.google.com/" class="gray">
            <span class="title">Google Drive</span>
            <span class="description">&nbsp;</span>
        </a>
    </li>
</ul>

<footer>
    <p id="copyright">&copy; <?php echo date("Y"); ?> SDSU - Instructional Technology Services
    <p id="disclaimer">The statements found on this page/site are for informational purposes only. While every effort is
        made to ensure that this information is up to date and accurate, official information can be found in the
        university publications.</p>
</footer>
</body>
</html>
