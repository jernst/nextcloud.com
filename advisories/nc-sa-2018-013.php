<div class="row page-content-header">
<div class="col-md-12">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-12">
        <h2>Session fixation on public share page (NC-SA-2018-013)</h2>
        <p>25th October 2018</p>
        <p>Risk level: <strong>Low</strong></p>
        <p>CVSS v3 Base Score: 3.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/AV:N/AC:H/PR:H/UI:R/S:U/C:L/I:L/A:N">AV:N/AC:H/PR:H/UI:R/S:U/C:L/I:L/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/384.html">Session Fixation (CWE-384)</a></p>
        <p>HackerOne report: <a href="https://hackerone.com/reports/237184">237184</a></p>
        <h3>Description</h3>
        <p>A bug causing session fixation could potentially allow an attacker to obtain access to password protected shares.</p>
        <h3>Affected Software</h3>
        <ul>
            <li>Nextcloud Server &lt; <strong>14.0.0</strong> (CVE-2018-16463)</li>
<li>Nextcloud Server &lt; <strong>13.0.3</strong> (CVE-2018-16463)</li>
<li>Nextcloud Server &lt; <strong>12.0.8</strong> (CVE-2018-16463)</li>

        </ul>
        <h3>Action Taken</h3>
        <p>The error has been fixed.</p>
        <h3>Resolution</h3>
        <p>It is recommended that all instances are upgraded to at least Nextcloud 14.0.0, Nextcloud 13.0.3 or Nextcloud 12.0.8.</p>
        <h3>Acknowledgements</h3>
        <p>The Nextcloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li>Anonymous hacker - Vulnerability discovery and disclosure.</li>
        </ul>
        <br/>
        <small style="color:grey">This advisory is licensed <a href="https://creativecommons.org/licenses/by-sa/4.0/">CC BY-SA 4.0</a>.</small>
    </div>
</div>
