<?php
require_once __DIR__ . '/includes/config.php';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>AHS Class of 2003 - Time Machine</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Aberdeen High School Class of 2003 Reunion Portal - Step Back, Reconnect, Remember">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Playfair+Display:wght@400;600&display=swap" rel="stylesheet">
<style type="text/css">
/* ============================================
   BASE RESET
   ============================================ */
* { box-sizing: border-box; margin: 0; padding: 0; }

/* ============================================
   MODE TOGGLE - Always Modern Looking
   ============================================ */
.mode-toggle-bar {
    background: linear-gradient(180deg, #1a1a2e 0%, #16162a 100%);
    border-bottom: 1px solid rgba(255,255,255,0.1);
    padding: 12px 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 15px;
    font-family: 'Inter', -apple-system, sans-serif;
    font-size: 13px;
    position: sticky;
    top: 0;
    z-index: 1000;
}
.mode-label {
    color: rgba(255,255,255,0.4);
    font-weight: 600;
    transition: all 0.3s;
    cursor: pointer;
}
.mode-label:hover { color: rgba(255,255,255,0.7); }
.mode-label.active { color: #fff; }
.mode-switch {
    position: relative;
    width: 56px;
    height: 28px;
    background: rgba(255,255,255,0.1);
    border: 2px solid rgba(255,255,255,0.2);
    border-radius: 14px;
    cursor: pointer;
    transition: all 0.3s;
}
.mode-switch::after {
    content: '';
    position: absolute;
    top: 3px;
    left: 3px;
    width: 18px;
    height: 18px;
    background: linear-gradient(180deg, #FFCC00 0%, #e6b800 100%);
    border-radius: 50%;
    transition: transform 0.3s cubic-bezier(0.68, -0.15, 0.27, 1.15);
    box-shadow: 0 2px 8px rgba(255,204,0,0.4);
}
.mode-switch.modern::after {
    transform: translateX(28px);
    background: linear-gradient(180deg, #667eea 0%, #764ba2 100%);
    box-shadow: 0 2px 8px rgba(102,126,234,0.4);
}
.mode-switch:hover { border-color: rgba(255,255,255,0.4); }

/* ============================================
   2003 MODE - Full Nostalgia
   ============================================ */
body.mode-2003 {
    background-color: #001133;
    font-family: Verdana, Arial, sans-serif;
    color: #CCCCCC;
}
body.mode-2003 a:link { color: #00CCFF; text-decoration: none; }
body.mode-2003 a:visited { color: #9999FF; text-decoration: none; }
body.mode-2003 a:hover { color: #FFFFFF; text-decoration: underline; }
body.mode-2003 a:active { color: #FFCC00; }

body.mode-2003 .site-container {
    width: 1280px;
    margin: 0 auto;
}

body.mode-2003 .wrapper {
    background-image: url("data:image/gif;base64,R0lGODlhZABkAIAAAAAAAP///yH5BAEAAAEALAAAAABkAGQAAAKEjI+py+0Po5y02ouz3rz7D4biSJbmiabqWgLAC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjoCAAA7");
}

/* 2003 Elements */
body.mode-2003 .gold-bar { background-color: #FFCC00; height: 3px; }
body.mode-2003 .gold-bar-thin { background-color: #FFCC00; height: 1px; }

body.mode-2003 .header-2003 {
    background-color: #001844;
    text-align: center;
    padding: 25px 15px;
}
body.mode-2003 .school-name {
    font-family: Georgia, "Times New Roman", serif;
    font-size: 28px;
    color: #FFCC00;
    font-weight: bold;
}
body.mode-2003 .class-year {
    font-family: Impact, "Arial Black", sans-serif;
    font-size: 42px;
    color: #FFFFFF;
    font-weight: bold;
    letter-spacing: 2px;
}
body.mode-2003 .tagline {
    font-family: Georgia, "Times New Roman", serif;
    font-size: 18px;
    color: #6699CC;
    font-style: italic;
}
body.mode-2003 .subtagline {
    font-size: 12px;
    color: #FFCC00;
    margin-top: 10px;
}

body.mode-2003 .nav-bar {
    background-color: #002255;
    text-align: center;
    padding: 10px 5px;
}
body.mode-2003 .nav-bar a {
    padding: 5px 10px;
    font-size: 12px;
    display: inline-block;
}
body.mode-2003 .nav-bar a:hover { background-color: #000066; }

body.mode-2003 .marquee-container {
    background-color: #000000;
}
body.mode-2003 .marquee-container marquee {
    font-size: 12px;
    color: #FFCC00;
    padding: 5px 0;
}

body.mode-2003 .main-content { display: flex; }
body.mode-2003 .sidebar {
    width: 180px;
    background-color: #001133;
    border-right: 1px solid #334466;
    padding: 15px;
    flex-shrink: 0;
}
body.mode-2003 .content {
    flex: 1;
    background-color: #001844;
    padding: 25px;
}

body.mode-2003 .sidebar-box { margin-bottom: 15px; }
body.mode-2003 .sidebar-box-header {
    padding: 5px;
    text-align: center;
    font-size: 11px;
    font-weight: bold;
}
body.mode-2003 .sidebar-box-content {
    background-color: #001844;
    padding: 10px;
    font-size: 11px;
}
body.mode-2003 .sidebar-box-content a { display: block; margin-bottom: 8px; }
body.mode-2003 .header-gold { background-color: #FFCC00; color: #001133; }
body.mode-2003 .header-green { background-color: #00CC66; color: #001133; }
body.mode-2003 .header-blue { background-color: #6699CC; color: #001133; }

body.mode-2003 .badge {
    background-color: #222233;
    padding: 8px;
    margin: 3px 0;
    text-align: center;
    font-size: 10px;
    color: #666666;
}
body.mode-2003 .badge span { color: #888888; display: block; }

body.mode-2003 .content-box {
    background-color: #002244;
    border: 1px solid #334466;
    padding: 20px;
    margin-bottom: 20px;
}
body.mode-2003 .content-box-title {
    font-family: Georgia, "Times New Roman", serif;
    font-size: 24px;
    color: #FFCC00;
    font-weight: bold;
    text-align: center;
    margin-bottom: 15px;
}

body.mode-2003 .remember-list { max-width: 400px; margin: 15px auto; }
body.mode-2003 .remember-item { padding: 5px 0; font-size: 13px; }
body.mode-2003 .remember-item .star { margin-right: 10px; }
body.mode-2003 .star-gold { color: #FFCC00; }
body.mode-2003 .star-cyan { color: #00CCFF; }
body.mode-2003 .star-pink { color: #FF99CC; }
body.mode-2003 .star-green { color: #99FF99; }

body.mode-2003 .construction {
    background-color: #1A1A00;
    border-top: 3px solid #FFCC00;
    border-bottom: 3px solid #FFCC00;
    text-align: center;
    padding: 15px;
}
body.mode-2003 .construction-text {
    font-family: Impact, "Arial Black", sans-serif;
    font-size: 18px;
    color: #FFCC00;
}

body.mode-2003 .coming-soon-item { margin-bottom: 12px; font-size: 13px; }
body.mode-2003 .coming-soon-item span { color: #FFFFFF; }

body.mode-2003 .bottom-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    margin-top: 20px;
}
body.mode-2003 .guestbook-btn {
    background-color: #002244;
    border: 1px solid #FFCC00;
    padding: 15px 25px;
    text-align: center;
}
body.mode-2003 .guestbook-btn .title {
    color: #FFCC00;
    font-weight: bold;
    font-size: 13px;
    margin-bottom: 5px;
}
body.mode-2003 .visitor-counter {
    background-color: #000000;
    border: 1px solid #00CC66;
    padding: 12px 20px;
    font-family: "Courier New", monospace;
    color: #00CC66;
    font-size: 13px;
}

body.mode-2003 .footer-2003 {
    background-color: #001133;
    text-align: center;
    padding: 20px 15px;
    font-size: 11px;
    color: #666666;
    border-top: 1px solid #FFCC00;
}
body.mode-2003 .footer-links { margin: 10px 0; }
body.mode-2003 .footer-links a { margin: 0 8px; }
body.mode-2003 .footer-note { color: #444444; margin-top: 10px; }
body.mode-2003 .footer-dev { color: #555555; margin-top: 5px; }

/* BLINK EFFECT */
@keyframes blink {
    0%, 49% { opacity: 1; }
    50%, 100% { opacity: 0; }
}
body.mode-2003 .blink {
    animation: blink 1s step-end infinite;
}

/* NEW icon bounce */
@keyframes bounce {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.2); }
}
body.mode-2003 .new-icon {
    color: #FF0000;
    font-weight: bold;
    font-size: 10px;
    animation: bounce 0.5s ease infinite;
    display: inline-block;
    margin-left: 5px;
}

/* Animated rainbow text */
@keyframes rainbow {
    0% { color: #FF0000; }
    15% { color: #FF7F00; }
    30% { color: #FFFF00; }
    45% { color: #00FF00; }
    60% { color: #0000FF; }
    75% { color: #4B0082; }
    90% { color: #8F00FF; }
    100% { color: #FF0000; }
}
body.mode-2003 .rainbow {
    animation: rainbow 3s linear infinite;
    font-weight: bold;
}

/* Spinning animation */
@keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}
body.mode-2003 .spin {
    display: inline-block;
    animation: spin 2s linear infinite;
}

/* Sparkle cursor trail */
body.mode-2003 .sparkle {
    position: fixed;
    pointer-events: none;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: radial-gradient(circle, #FFFF00 0%, #FF00FF 50%, transparent 70%);
    opacity: 0;
    z-index: 9999;
}

/* Web ring box */
body.mode-2003 .webring {
    background: #000033;
    border: 2px ridge #6699CC;
    padding: 10px;
    margin: 15px 0;
    text-align: center;
    font-size: 10px;
}
body.mode-2003 .webring-title {
    color: #FFCC00;
    font-weight: bold;
    margin-bottom: 8px;
}
body.mode-2003 .webring a {
    margin: 0 5px;
}

/* Animated divider */
body.mode-2003 .star-divider {
    text-align: center;
    padding: 5px 0;
    font-size: 8px;
    letter-spacing: 3px;
    color: #FFCC00;
}

/* Email icon area */
body.mode-2003 .email-link {
    display: inline-flex;
    align-items: center;
    gap: 5px;
}
body.mode-2003 .email-icon {
    font-size: 16px;
    animation: bounce 1s ease infinite;
    display: inline-block;
}

/* Click here button */
body.mode-2003 .click-here {
    background: linear-gradient(180deg, #FFCC00 0%, #CC9900 100%);
    color: #000033;
    padding: 5px 15px;
    border: 2px outset #FFCC00;
    font-weight: bold;
    font-size: 11px;
    cursor: pointer;
    display: inline-block;
}
body.mode-2003 .click-here:hover {
    border-style: inset;
}

/* Flame effect text */
@keyframes flame {
    0%, 100% { text-shadow: 0 0 4px #ff0, 0 -5px 4px #ff3, 2px -10px 6px #ff6, -2px -15px 11px #ff9, 2px -25px 18px #ffc; }
    25% { text-shadow: 0 0 4px #ff0, 2px -5px 4px #ff3, -2px -10px 6px #ff6, 2px -15px 11px #ff9, -2px -25px 18px #ffc; }
    50% { text-shadow: 0 0 4px #ff0, -2px -5px 4px #ff3, 2px -10px 6px #ff6, -2px -15px 11px #ff9, 2px -25px 18px #ffc; }
    75% { text-shadow: 0 0 4px #ff0, 2px -5px 4px #ff3, 2px -10px 6px #ff6, -2px -15px 11px #ff9, -2px -25px 18px #ffc; }
}
body.mode-2003 .flame-text {
    animation: flame 0.8s ease-in-out infinite;
    color: #FF6600;
}

/* Retro counter style */
body.mode-2003 .retro-counter {
    background: #000;
    border: 2px inset #333;
    padding: 5px 10px;
    font-family: "Courier New", monospace;
    display: inline-block;
}
body.mode-2003 .counter-digit {
    background: #001100;
    color: #00FF00;
    padding: 2px 4px;
    margin: 0 1px;
    border: 1px solid #003300;
    font-size: 14px;
    font-weight: bold;
}

/* Hide modern elements in 2003 mode */
body.mode-2003 .modern-only { display: none !important; }

/* ============================================
   MODERN MODE - Clean 2024 Design
   ============================================ */
body.mode-modern {
    background: linear-gradient(180deg, #0f0f1a 0%, #1a1a2e 50%, #0f0f1a 100%);
    font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
    color: #e0e0e0;
    line-height: 1.6;
}
body.mode-modern a {
    color: #667eea;
    text-decoration: none;
    transition: color 0.2s;
}
body.mode-modern a:hover { color: #818cf8; }

body.mode-modern .site-container {
    width: 100%;
    max-width: 100%;
    margin: 0;
}

body.mode-modern .wrapper {
    width: 100%;
}

/* Hide 2003 elements in modern mode */
body.mode-modern .retro-only { display: none !important; }

/* Modern Hero - Full Width */
body.mode-modern .header-2003 {
    background: linear-gradient(135deg, rgba(102,126,234,0.08) 0%, rgba(118,75,162,0.08) 100%);
    padding: 100px 20px;
    text-align: center;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    width: 100%;
}

body.mode-modern .school-name {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #667eea;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 15px;
}

body.mode-modern .class-year {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: clamp(48px, 8vw, 72px);
    font-weight: 600;
    color: #ffffff;
    letter-spacing: -1px;
    line-height: 1.1;
}

body.mode-modern .tagline {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 24px;
    color: rgba(255,255,255,0.6);
    font-style: italic;
    font-weight: 400;
    margin-top: 15px;
}

body.mode-modern .subtagline {
    font-size: 14px;
    color: rgba(255,255,255,0.4);
    margin-top: 25px;
    font-weight: 400;
}

/* Modern Nav - Full Width */
body.mode-modern .nav-bar {
    background: rgba(0,0,0,0.2);
    backdrop-filter: blur(10px);
    padding: 0;
    display: flex;
    justify-content: center;
    gap: 0;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    width: 100%;
}
body.mode-modern .nav-bar a {
    padding: 20px 25px;
    font-size: 13px;
    font-weight: 500;
    color: rgba(255,255,255,0.6);
    transition: all 0.2s;
    border-bottom: 2px solid transparent;
}
body.mode-modern .nav-bar a:hover {
    color: #fff;
    background: rgba(255,255,255,0.03);
    border-bottom-color: #667eea;
}
body.mode-modern .nav-divider { display: none; }

/* Hide marquee in modern */
body.mode-modern .marquee-container { display: none; }
body.mode-modern .gold-bar { display: none; }
body.mode-modern .gold-bar-thin { display: none; }

/* Modern Main Layout - Full Width Container */
body.mode-modern .main-content {
    display: block;
    padding: 80px 20px;
    width: 100%;
}

body.mode-modern .content {
    max-width: 800px;
    margin: 0 auto;
    background: none;
    padding: 0;
}

body.mode-modern .sidebar { display: none; }

/* Modern Content Cards */
body.mode-modern .content-box {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.06);
    border-radius: 16px;
    padding: 40px;
    margin-bottom: 30px;
    transition: all 0.3s;
}
body.mode-modern .content-box:hover {
    background: rgba(255,255,255,0.05);
    border-color: rgba(255,255,255,0.1);
    transform: translateY(-2px);
}

body.mode-modern .content-box-title {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 32px;
    color: #ffffff;
    font-weight: 600;
    text-align: left;
    margin-bottom: 25px;
}

body.mode-modern .remember-intro {
    font-size: 18px;
    color: rgba(255,255,255,0.7);
    margin-bottom: 30px;
}

body.mode-modern .remember-list {
    max-width: 100%;
    margin: 0;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 15px;
}

body.mode-modern .remember-item {
    padding: 20px;
    background: rgba(255,255,255,0.03);
    border-radius: 12px;
    font-size: 15px;
    display: flex;
    align-items: center;
    gap: 15px;
    transition: all 0.2s;
}
body.mode-modern .remember-item:hover {
    background: rgba(255,255,255,0.06);
    transform: translateX(5px);
}

body.mode-modern .remember-item .star {
    font-size: 20px;
    margin: 0;
}

body.mode-modern .star-gold { color: #fbbf24; }
body.mode-modern .star-cyan { color: #22d3ee; }
body.mode-modern .star-pink { color: #f472b6; }
body.mode-modern .star-green { color: #4ade80; }

body.mode-modern .remember-outro {
    font-family: 'Playfair Display', Georgia, serif;
    font-size: 24px;
    color: rgba(255,255,255,0.8);
    font-style: italic;
    margin: 40px 0 20px;
    text-align: center;
}

body.mode-modern .remember-year {
    font-size: 15px;
    color: rgba(255,255,255,0.4);
    text-align: center;
}

/* Modern Construction Banner */
body.mode-modern .construction {
    background: linear-gradient(135deg, rgba(251,191,36,0.1) 0%, rgba(245,158,11,0.05) 100%);
    border: 1px solid rgba(251,191,36,0.2);
    border-radius: 12px;
    padding: 25px;
    margin-bottom: 30px;
    text-align: center;
}
body.mode-modern .construction-text {
    font-family: 'Inter', sans-serif;
    font-size: 14px;
    font-weight: 600;
    color: #fbbf24;
    letter-spacing: 1px;
}

/* Modern Coming Soon */
body.mode-modern .coming-soon-title {
    font-size: 13px;
    font-weight: 600;
    color: #667eea;
    text-transform: uppercase;
    letter-spacing: 2px;
    margin-bottom: 25px;
}

body.mode-modern .coming-soon-item {
    padding: 20px 0;
    border-bottom: 1px solid rgba(255,255,255,0.05);
    font-size: 16px;
    display: flex;
    align-items: baseline;
    gap: 15px;
}
body.mode-modern .coming-soon-item:last-child { border-bottom: none; }
body.mode-modern .coming-soon-item .arrow {
    color: #667eea;
    font-size: 14px;
}
body.mode-modern .coming-soon-item span {
    color: #ffffff;
    font-weight: 500;
}
body.mode-modern .coming-soon-item .desc {
    color: rgba(255,255,255,0.5);
    font-weight: 400;
}

/* Modern Bottom Row */
body.mode-modern .bottom-row {
    display: flex;
    gap: 20px;
    margin-top: 40px;
    justify-content: center;
}

body.mode-modern .guestbook-btn {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border: none;
    border-radius: 12px;
    padding: 20px 35px;
    transition: all 0.3s;
}
body.mode-modern .guestbook-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 30px rgba(102,126,234,0.3);
}
body.mode-modern .guestbook-btn .title {
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    margin-bottom: 8px;
}
body.mode-modern .guestbook-btn a {
    color: rgba(255,255,255,0.8);
    font-size: 13px;
}
body.mode-modern .guestbook-btn a:hover { color: #fff; }

body.mode-modern .visitor-counter {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 12px;
    padding: 20px 30px;
    font-family: 'Inter', sans-serif;
    color: rgba(255,255,255,0.5);
    font-size: 14px;
    display: flex;
    align-items: center;
}

/* Modern Footer - Full Width */
body.mode-modern .footer-2003 {
    background: rgba(0,0,0,0.4);
    padding: 60px 20px;
    text-align: center;
    margin-top: 0;
    border-top: 1px solid rgba(255,255,255,0.05);
    width: 100%;
}
body.mode-modern .footer-2003 .copyright {
    color: rgba(255,255,255,0.4);
    font-size: 14px;
}
body.mode-modern .footer-links {
    margin: 20px 0;
    display: flex;
    justify-content: center;
    gap: 30px;
}
body.mode-modern .footer-links a {
    color: rgba(255,255,255,0.5);
    font-size: 14px;
}
body.mode-modern .footer-links a:hover { color: #667eea; }
body.mode-modern .footer-note { display: none; }
body.mode-modern .footer-dev {
    color: rgba(255,255,255,0.3);
    font-size: 12px;
    margin-top: 20px;
}

/* Modern Responsive */
@media screen and (max-width: 768px) {
    body.mode-modern .header-2003 { padding: 50px 20px; }
    body.mode-modern .nav-bar { flex-wrap: wrap; }
    body.mode-modern .nav-bar a { padding: 15px 18px; font-size: 12px; }
    body.mode-modern .main-content { padding: 40px 15px; }
    body.mode-modern .content-box { padding: 25px; }
    body.mode-modern .content-box-title { font-size: 26px; }
    body.mode-modern .remember-list { grid-template-columns: 1fr; }
    body.mode-modern .bottom-row { flex-direction: column; align-items: stretch; }
    body.mode-modern .guestbook-btn,
    body.mode-modern .visitor-counter { text-align: center; justify-content: center; }
}
</style>
</head>

<body class="mode-2003">

<!-- MODE TOGGLE -->
<div class="mode-toggle-bar">
    <span class="mode-label label-2003 active" onclick="set2003Mode()">2003</span>
    <div class="mode-switch" id="modeSwitch" onclick="toggleMode()"></div>
    <span class="mode-label label-modern" onclick="setModernMode()">You're Old</span>
</div>

<div class="site-container">
<div class="wrapper">

<!-- TOP GOLD BAR -->
<div class="gold-bar retro-only"></div>

<!-- HEADER -->
<div class="header-2003">
    <div class="school-name">Aberdeen High School</div>
    <div class="class-year">CLASS OF 2003</div>
    <div class="tagline">~ The Time Machine ~</div>
    <div class="subtagline">&#9733; Step Back &nbsp;&#8226;&nbsp; Reconnect &nbsp;&#8226;&nbsp; Remember &#9733;</div>
</div>

<!-- GOLD DIVIDER -->
<div class="gold-bar-thin retro-only" style="height: 2px;"></div>

<!-- NAVIGATION -->
<div class="nav-bar">
    <a href="#">HOME</a><span class="nav-divider retro-only"> | </span>
    <a href="#">CLASSMATES</a><span class="nav-divider retro-only"> | </span>
    <a href="#">YEARBOOK</a><span class="nav-divider retro-only"> | </span>
    <a href="#">MEMORIES</a><span class="nav-divider retro-only"> | </span>
    <a href="#">GUESTBOOK</a><span class="nav-divider retro-only"> | </span>
    <a href="#">CONTACT</a>
</div>

<!-- THIN GOLD LINE -->
<div class="gold-bar-thin retro-only"></div>

<!-- MARQUEE -->
<div class="marquee-container retro-only">
    <marquee behavior="scroll" direction="left" scrollamount="2">
        &nbsp; &nbsp; &#9733; Welcome to the AHS Class of 2003 Time Machine! &nbsp; &#9733; &nbsp; Go Bobcats! &nbsp; &#9733; &nbsp; <span class="blink">***NEW***</span> Site Under Construction - More Features Coming Soon! &nbsp; &#9733; &nbsp; Sign our Guestbook! &nbsp; &#9733; &nbsp; <span class="rainbow">~*~Class Reunion 2024~*~</span> &nbsp; &#9733; &nbsp;
    </marquee>
</div>

<!-- MAIN CONTENT AREA -->
<div class="main-content">

    <!-- SIDEBAR (2003 only) -->
    <div class="sidebar retro-only">
        <div class="sidebar-box">
            <div class="sidebar-box-header header-gold">NAVIGATE</div>
            <div class="sidebar-box-content">
                <a href="#">&#9658; Home</a>
                <a href="#">&#9658; Classmates</a><span class="new-icon retro-only">NEW!</span>
                <a href="#">&#9658; Yearbook</a>
                <a href="#">&#9658; Memories</a>
                <a href="#">&#9658; Events</a>
                <a href="#">&#9658; Links</a>
                <a href="#" style="margin-bottom: 0;">&#9658; Contact</a>
            </div>
        </div>

        <div class="sidebar-box">
            <div class="sidebar-box-header header-green">BUDDY LIST</div>
            <div class="sidebar-box-content">
                <span style="color: #00CC66;">&#9679; Online (0)</span><br>
                <span style="color: #CC3333;">&#9679; Offline (???)</span><br><br>
                <span style="color: #666666; font-style: italic;">Coming Soon!</span>
            </div>
        </div>

        <div class="sidebar-box">
            <div class="sidebar-box-header header-blue">UPDATES</div>
            <div class="sidebar-box-content" style="color: #AAAAAA;">
                <b><?php echo date('n/j/y'); ?></b><br>
                Site launched!<br><br>
                <b>Soon:</b><br>
                - Profiles<br>
                - Photos<br>
                - Chat
            </div>
        </div>

        <div class="sidebar-box">
            <div class="badge">Made with<span>Notepad</span></div>
            <div class="badge">Best Viewed<span>1280x720</span></div>
            <div class="badge">Y2K<span>Compliant</span></div>
            <div class="badge"><span class="flame-text">HOT</span><span>SITE!</span></div>
        </div>

        <!-- Extra 2003 Trash -->
        <div class="sidebar-box" style="text-align: center; font-size: 10px;">
            <marquee direction="up" scrollamount="1" style="height: 60px;">
                <div style="color: #FFCC00;">&#9733; Welcome! &#9733;</div>
                <div style="color: #00CCFF;">Thanks for visiting</div>
                <div style="color: #FF99CC;">Sign my guestbook!</div>
                <div style="color: #99FF99;">Go Bobcats!</div>
            </marquee>
        </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="content">

        <!-- Welcome Box -->
        <div class="content-box">
            <div class="content-box-title">Welcome, Class of 2003!</div>

            <p class="remember-intro retro-only" style="text-align: center; font-family: Georgia, serif; font-size: 16px; margin-bottom: 20px;">
                Remember when...
            </p>
            <p class="remember-intro modern-only">Remember when...</p>

            <div class="remember-list">
                <div class="remember-item"><span class="star star-gold">&#9733;</span> <span>Your away message was poetry</span></div>
                <div class="remember-item"><span class="star star-cyan">&#9733;</span> <span>Your Top 8 defined your social life</span></div>
                <div class="remember-item"><span class="star star-pink">&#9733;</span> <span>That dial-up sound meant freedom</span></div>
                <div class="remember-item"><span class="star star-green">&#9733;</span> <span>Burning CDs was an art form</span></div>
            </div>

            <p class="remember-outro retro-only" style="text-align: center; font-family: Georgia, serif; font-size: 16px; color: #6699CC; font-style: italic; margin: 20px 0;">
                We're bringing it all back.
            </p>
            <p class="remember-outro modern-only">We're bringing it all back.</p>

            <p class="remember-year retro-only" style="text-align: center; font-size: 13px; color: #999999;">
                The year is <?php echo date('Y'); ?>... but let's pretend it's not.
            </p>
            <p class="remember-year modern-only">The year is <?php echo date('Y'); ?>... but let's pretend it's not.</p>
        </div>

        <!-- Star Divider -->
        <div class="star-divider retro-only">&#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022;</div>

        <!-- Under Construction -->
        <div class="construction">
            <span class="construction-text retro-only"><span class="spin">&#9888;</span> &nbsp; SITE UNDER CONSTRUCTION &nbsp; <span class="spin">&#9888;</span></span>
            <span class="construction-text modern-only">&#9888; &nbsp; SITE UNDER CONSTRUCTION &nbsp; &#9888;</span>
        </div>

        <!-- Star Divider -->
        <div class="star-divider retro-only">&#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022; &#10022;</div>

        <br class="retro-only">

        <!-- Coming Soon -->
        <div class="content-box">
            <div class="coming-soon-title retro-only" style="color: #FFCC00; font-weight: bold; margin-bottom: 15px;">Coming Soon:</div>
            <div class="coming-soon-title modern-only">Coming Soon</div>

            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Classmate Directory</span> <span class="desc">— Find and reconnect with your classmates</span></div>
            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Yearbook Archive</span> <span class="desc">— Browse scanned yearbook pages (2000-2003)</span></div>
            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Memory Wall</span> <span class="desc">— Share your favorite high school memories</span></div>
            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Photo Galleries</span> <span class="desc">— Then & Now photo collections</span></div>
            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Chat Room</span> <span class="desc">— Just like old times</span></div>
            <div class="coming-soon-item"><span class="arrow">&#9658;</span> <span>Reunion Info</span> <span class="desc">— Event planning and updates</span></div>
        </div>

        <!-- Guestbook & Counter -->
        <div class="bottom-row">
            <div class="guestbook-btn">
                <div class="title"><span class="retro-only"><span class="spin">&#9998;</span></span><span class="modern-only">&#9998;</span> GUESTBOOK</div>
                <a href="#" class="retro-only click-here">SIGN IT!</a>
                <a href="#" class="modern-only">Sign</a> | <a href="#">View</a>
            </div>
            <div class="visitor-counter retro-only">
                YOU ARE VISITOR #<br>
                <span class="retro-counter">
                    <?php
                    $count = str_pad(rand(10000, 99999), 6, '0', STR_PAD_LEFT);
                    for($i = 0; $i < strlen($count); $i++) {
                        echo '<span class="counter-digit">' . $count[$i] . '</span>';
                    }
                    ?>
                </span>
            </div>
            <div class="visitor-counter modern-only">
                VISITORS: <?php echo str_pad(rand(1000, 9999), 6, '0', STR_PAD_LEFT); ?>
            </div>
        </div>

        <!-- Web Ring (2003 only) -->
        <div class="webring retro-only">
            <div class="webring-title">&#127760; AHS ALUMNI WEB RING &#127760;</div>
            [ <a href="#">&lt;&lt; Prev</a> | <a href="#">Random</a> | <a href="#">List</a> | <a href="#">Next &gt;&gt;</a> ]
        </div>

        <!-- Email Link (2003 only) -->
        <div style="text-align: center; margin-top: 15px;" class="retro-only">
            <a href="mailto:contact@ahs2003.com" class="email-link">
                <span class="email-icon">&#9993;</span>
                <span class="blink">EMAIL US!</span>
                <span class="email-icon">&#9993;</span>
            </a>
        </div>

    </div>

</div>

<!-- FOOTER -->
<div class="gold-bar-thin retro-only"></div>
<div class="footer-2003">
    <span class="copyright">&copy; <?php echo date('Y'); ?> AHS Class of 2003 Alumni &nbsp;|&nbsp; Aberdeen, Washington</span>
    <div class="footer-links">
        <a href="#">Home</a><span class="retro-only"> &#8226;</span>
        <a href="#">Classmates</a><span class="retro-only"> &#8226;</span>
        <a href="#">Yearbook</a><span class="retro-only"> &#8226;</span>
        <a href="#">Contact</a>
    </div>
    <div class="footer-note retro-only">
        Best viewed with Netscape Navigator 4.0+ or Internet Explorer 5.0+<br>
        <span style="font-size: 9px; color: #555;">Screen resolution: 1280x720 | 16-bit color minimum | JavaScript enabled</span><br>
        <span class="blink" style="color: #FF6600;">&#9733;</span>
        <span style="color: #888;">This site is</span>
        <span class="rainbow">GEOCITIES CERTIFIED</span>
        <span class="blink" style="color: #FF6600;">&#9733;</span>
    </div>
    <div class="footer-dev">Dev: <a href="https://rossdynamics.com" target="_blank">Ross Dynamics LLC</a> - v1.1</div>
</div>

<!-- BOTTOM GOLD BAR -->
<div class="gold-bar retro-only"></div>

</div>
</div>

<script>
var DESIGN_WIDTH = 1280; // 720p width - nobody has 800x600 anymore
var currentMode = localStorage.getItem('ahs2003_mode') || '2003';

function initMode() {
    if (currentMode === 'modern') {
        setModernMode();
    } else {
        set2003Mode();
    }
}

function toggleMode() {
    if (currentMode === '2003') {
        setModernMode();
    } else {
        set2003Mode();
    }
}

function set2003Mode() {
    currentMode = '2003';
    localStorage.setItem('ahs2003_mode', '2003');

    document.body.classList.remove('mode-modern');
    document.body.classList.add('mode-2003');

    document.getElementById('modeSwitch').classList.remove('modern');
    document.querySelector('.label-2003').classList.add('active');
    document.querySelector('.label-modern').classList.remove('active');

    document.body.style.cursor = 'crosshair';
    apply2003Scaling();
}

function setModernMode() {
    currentMode = 'modern';
    localStorage.setItem('ahs2003_mode', 'modern');

    document.body.classList.remove('mode-2003');
    document.body.classList.add('mode-modern');

    document.getElementById('modeSwitch').classList.add('modern');
    document.querySelector('.label-modern').classList.add('active');
    document.querySelector('.label-2003').classList.remove('active');

    document.body.style.cursor = 'default';
    // Clean up any sparkles
    sparkles.forEach(function(s) { s.el.remove(); });
    sparkles = [];

    removeScaling();
}

function apply2003Scaling() {
    var container = document.querySelector('.site-container');
    var screenWidth = window.innerWidth;

    if (screenWidth < DESIGN_WIDTH) {
        var scale = screenWidth / DESIGN_WIDTH;
        container.style.transform = 'scale(' + scale + ')';
        container.style.transformOrigin = 'top left';
        container.style.width = DESIGN_WIDTH + 'px';
        document.body.style.overflowX = 'hidden';
        var originalHeight = container.offsetHeight;
        document.body.style.minHeight = (originalHeight * scale) + 'px';
    } else {
        container.style.transform = '';
        container.style.width = DESIGN_WIDTH + 'px';
        document.body.style.minHeight = '';
    }
}

function removeScaling() {
    var container = document.querySelector('.site-container');
    container.style.transform = '';
    container.style.width = '';
    document.body.style.minHeight = '';
}

initMode();

window.addEventListener('resize', function() {
    if (currentMode === '2003') {
        apply2003Scaling();
    }
});

// ============================================
// CURSOR SPARKLE TRAIL - Peak 90s energy
// ============================================
var sparkles = [];
var sparkleCount = 0;

document.addEventListener('mousemove', function(e) {
    if (currentMode !== '2003') return;

    sparkleCount++;
    if (sparkleCount % 3 !== 0) return; // Throttle

    var sparkle = document.createElement('div');
    sparkle.className = 'sparkle';
    sparkle.style.left = e.pageX + 'px';
    sparkle.style.top = e.pageY + 'px';
    sparkle.style.opacity = '1';
    document.body.appendChild(sparkle);

    var colors = ['#FFFF00', '#FF00FF', '#00FFFF', '#FF0000', '#00FF00'];
    sparkle.style.background = 'radial-gradient(circle, ' + colors[Math.floor(Math.random() * colors.length)] + ' 0%, transparent 70%)';
    sparkle.style.width = (5 + Math.random() * 10) + 'px';
    sparkle.style.height = sparkle.style.width;

    sparkles.push({
        el: sparkle,
        life: 30,
        vx: (Math.random() - 0.5) * 2,
        vy: (Math.random() - 0.5) * 2 - 1
    });
});

setInterval(function() {
    for (var i = sparkles.length - 1; i >= 0; i--) {
        var s = sparkles[i];
        s.life--;
        s.el.style.opacity = s.life / 30;
        s.el.style.left = (parseFloat(s.el.style.left) + s.vx) + 'px';
        s.el.style.top = (parseFloat(s.el.style.top) + s.vy) + 'px';

        if (s.life <= 0) {
            s.el.remove();
            sparkles.splice(i, 1);
        }
    }
}, 30);

// Custom cursor for 2003 mode
function updateCursor() {
    if (currentMode === '2003') {
        document.body.style.cursor = 'crosshair';
    } else {
        document.body.style.cursor = 'default';
    }
}
updateCursor();
</script>

</body>
</html>
