<?php
$ua = $_SERVER['HTTP_USER_AGENT'] ?? '';

$looksLikeCurlOrLink2 = preg_match('/\b(curl|link2)\b/i', $ua) === 1;

$svg = <<<'SVG'
<?xml version="1.0" encoding="UTF-8"?>
<svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" viewBox="0 0 1600 2700" preserveAspectRatio="xMidYMid meet">
  <style>
    text, tspan {
      user-select: text;
      -webkit-user-select: text;
      pointer-events: auto;
    }
  </style>

  <rect x="0" y="0" width="1600" height="2700" fill="#1a1a1a"/>
  <rect x="0" y="0" width="1600" height="2700" fill="#333333"/>

  <rect x="120" y="120" width="1360" height="2460" fill="#333333" fill-opacity="0.85"/>
  <rect x="120" y="120" width="1360" height="260" fill="#000000" fill-opacity="0.98"/>

  <text x="800" y="228" font-family="Arial, Helvetica, sans-serif" font-size="80" fill="#ff6600" text-anchor="middle" font-weight="700" letter-spacing="2">NAZY-OS</text>
  <text x="800" y="318" font-family="Arial, Helvetica, sans-serif" font-size="40" fill="#ff6600" text-anchor="middle" font-weight="700">[Network Analysis and Zoning for You]</text>

  <text x="160" y="432" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32">
    <tspan font-weight="700" fill="#A9A9A9">NAZY - Operating System ---[Network Analysis and Zoning for You]---</tspan>
    <tspan x="160" dy="32">Current Release: 2k26_V.RCII</tspan>
  </text>

  <text x="160" y="494" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>a cutting-edge OS designed to prioritize security, efficiency, and</tspan></text>
  <text x="160" y="556" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>user-centric customization. With advanced tools for network analysis</tspan></text>
  <text x="160" y="618" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>and zoning, </tspan><tspan fill="#ff6600" font-weight="700">NAZY-OS</tspan><tspan> empowers professionals to monitor,</tspan></text>
  <text x="160" y="680" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>analyze, and optimize network performance while ensuring robust</tspan></text>
  <text x="160" y="742" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>protection against modern threats.</tspan></text>

  <text x="160" y="804" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>Built for reliability and scalability, it provides a seamless experience</tspan></text>
  <text x="160" y="866" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>across personal, enterprise, and critical infrastructure environments.</tspan></text>
  <text x="160" y="928" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan><tspan fill="#ff6600" font-weight="700">NAZY-OS</tspan> combines clean design principles with flexibility,</tspan></text>
  <text x="160" y="990" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>enabling users to tailor its features to their unique needs. Whether</tspan></text>
  <text x="160" y="1052" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>managing networks or securing sensitive data, </tspan><tspan fill="#ff6600" font-weight="700">NAZY-OS</tspan></text>
  <text x="160" y="1114" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>delivers performance and peace of mind.</tspan></text>

  <text x="160" y="1206" font-family="Consolas, monospace" font-size="24" fill="#ff6600" font-weight="700">Features</text>

  <text x="200" y="1276" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">1)</tspan> Comprehensive network analysis tools for real-time monitoring</text>
  <text x="200" y="1326" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">2)</tspan> Customizable zoning features for optimized performance and security segmentation</text>
  <text x="200" y="1426" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">3)</tspan> Strong security against modern cyber threats with IPS/IDS integration</text>
  <text x="200" y="1526" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">4)</tspan> Scalable architecture for personal, enterprise, and critical infrastructure use</text>
  <text x="200" y="1626" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">5)</tspan> Modern security tools: IPS, IDS, SIEM solutions and antivirus</text>
  <text x="200" y="1676" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">6)</tspan> Immutable filesystem with secure logging by default</text>
  <text x="200" y="1726" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">7)</tspan> RAID 10 via btrfs for secure and reliable logging</text>
  <text x="200" y="1776" font-family="Consolas, monospace" font-size="24" fill="#ff6600"><tspan font-weight="700">8)</tspan> Real-time high-security threat warnings and self-protection runtime routines</text>

  <text x="160" y="1918" font-family="Arial, Helvetica, sans-serif" font-size="40" fill="#ff6600" font-weight="700">FAQ</text>

  <text x="160" y="1990" font-family="Arial, Helvetica, sans-serif" font-size="32" fill="#ff6600" font-weight="700">What is NAZY-OS?</text>
  <text x="160" y="2052" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32">
    <tspan>NAZY-OS stands for </tspan><tspan fill="#A9A9A9" font-weight="700">Network Analysis and Zoning for You</tspan>.
    <tspan x="160" dy="32">It provides advanced tools to monitor, analyze, and optimize network</tspan>
  </text>
  <text x="160" y="2114" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>performance securely.</tspan></text>

  <text x="160" y="2176" font-family="Arial, Helvetica, sans-serif" font-size="32" fill="#ff6600" font-weight="700">Who can use NAZY-OS?</text>
  <text x="160" y="2238" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>Designed for individuals, enterprises, and critical infrastructures,</tspan></text>
  <text x="160" y="2300" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>offering flexibility and reliability for diverse needs.</tspan></text>

  <text x="160" y="2362" font-family="Arial, Helvetica, sans-serif" font-size="32" fill="#ff6600" font-weight="700">Is NAZY-OS open-source?</text>
  <text x="160" y="2424" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>Yes, promoting transparency and community-driven innovation under</tspan></text>
  <text x="160" y="2486" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>GPL-3 license.</tspan></text>

  <text x="160" y="2548" font-family="Arial, Helvetica, sans-serif" font-size="32" fill="#ff6600" font-weight="700">Where can I download NAZY-OS?</text>
  <text x="160" y="2610" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#32CD32"><tspan>Download the latest version from our official website:</tspan></text>
  <text x="160" y="2672" font-family="Arial, Helvetica, sans-serif" font-size="24" fill="#8A2BE2"><tspan>https://www.nazy-os.org/downloads</tspan></text>

  <text x="160" y="2754" font-family="Arial, Helvetica, sans-serif" font-size="28" fill="#ff6600" font-weight="700">Impressum &amp; Contact</text>
  <text x="160" y="2816" font-family="Arial, Helvetica, sans-serif" font-size="16" fill="#ff6600"><tspan>The address and telephone number will be updated soon. For now, we can only be contacted via email.</tspan></text>
  <text x="160" y="2860" font-family="Arial, Helvetica, sans-serif" font-size="16" fill="#32CD32"><tspan>For inquiries, please contact us at: feedback@nazy-os.org</tspan></text>
</svg>
SVG;

header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>NAZY-OS: Secure Network Analysis and Zoning</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="NAZY-OS: Secure, efficient operating system for network analysis and zoning.">
    <meta name="keywords" content="NAZY-OS, network analysis, zoning, open-source, security, operating system">
    <meta name="author" content="NAZY-OS Team">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noarchive, noimageindex, nosnippet, notranslate, index, follow">
    <meta http-equiv="X-Frame-Options" content="DENY">
    <meta http-equiv="X-Content-Type-Options" content="nosniff">
    <link rel="shortcut icon" href="https://nazy-os.org/favicon.ico" type="image/x-icon">
</head>
<body style="margin:0; background-color:#1a1a1a; color:#d9d9d9;">
<?php if ($looksLikeCurlOrLink2): ?>
    <?php echo $svg; ?>
<?php else: ?>
    <object data="nazy-os.svg" type="image/svg+xml" width="100%" height="100%">
        <div style="padding:12px; font-family:Arial, sans-serif; color:#d9d9d9; background:#000;">
            SVG cannot be displayed here. Please load “nazy-os.svg” directly.
            <a href="nazy-os.svg" style="color:#ff6600;">nazy-os.svg</a>
        </div>
    </object>
<?php endif; ?>
</body>
</html>
