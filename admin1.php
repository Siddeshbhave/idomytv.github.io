<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lumino - Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>



<style>
	
body {
  background: #f1f4f7;
  padding-top: 60px;
  font-size: 14px;
  color: #444444;
  font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif; }

p {
  color: #777; }

a, a:hover, a:focus {
  color: #30a5ff; }

h1, h2, h3, h4, h5, h6 {
  color: #444444; }

h1 {
  font-weight: 300;
  font-size: 40px; }

h2 {
  font-weight: 300;
  margin-bottom: 20px; }

h3, h4 {
  font-weight: 300; }

.large {
  font-size: 2em; }

.text-muted {
  color: #c5c7cc; }

.color-gray {
  color: #444444; }

.color-blue {
  color: #30a5ff; }

.color-teal {
  color: #1ebfae; }

.color-orange {
  color: #ffb53e; }

.color-red {
  color: #f9243f; }

.no-padding {
  padding: 0;
  margin: 0; }

.fa-xl {
  font-size: 2em; }

input.form-control {
  border: 1px solid #ddd;
  box-shadow: none;
  height: 46px; }

.bootstrap-table input.form-control {
  height: 34px; }

.input-group-btn .btn {
  height: 46px; }

.form-control:focus {
  border: 1px solid #30a5ff;
  outline: 0;
  box-shadow: inset 0px 0px 0px 1px #30a5ff; }

.has-success .form-control, .has-success .form-control:focus {
  border: 1px solid #8ad919; }

.has-warning .form-control, .has-warning .form-control:focus {
  border: 1px solid #ffb53e; }

.has-error .form-control, .has-error .form-control:focus {
  border: 1px solid #f9243f; }

.navbar-custom {
  background: #222;
  height: 60px; }

.navbar-header .navbar-brand {
  color: #fff;
  font-size: 20px;
  text-transform: uppercase;
  font-weight: 500;
  height: 60px;
  padding-top: 18px; }

.navbar-header .navbar-brand span {
  color: #30a5ff; }

.navbar-toggle {
  background: rgba(255, 255, 255, 0.1);
  padding: 12px;
  margin-top: 10px; }

.navbar-toggle:hover {
  background: rgba(255, 255, 255, 0.05); }

.icon-bar {
  background: #fff; }

.dropdown {
  background: rgba(255, 255, 255, 0.1);
  float: left;
  margin: 10px 8px;
  padding: 0px;
  border-radius: 4px; }

.dropdown a.dropdown-toggle {
  color: #fff;
  height: 40px;
  width: 40px;
  padding-top: 11px;
  padding-left: 9px; }

.dropdown:hover {
  color: #fff;
  background: rgba(255, 255, 255, 0.2); }

.dropdown .label {
  top: -4px;
  left: 22px;
  padding-top: 4px;
  padding-bottom: 4px;
  position: absolute;
  border-radius: 9999px; }

.navbar-top-links li:last-child {
  margin-right: 15px; }

.nav > li > a:hover, .nav > li > a:focus, .nav .open > a, .nav .open > a:hover, .nav .open > a:focus {
  text-decoration: none;
  background-color: rgba(255, 255, 255, 0.2);
  background: none; }

.dropdown-messages {
  border: 1px solid #fff;
  width: 360px;
  background: rgba(255, 255, 255, 0.9);
  color: #444;
  font-size: 0.9em; }

.dropdown-messages img {
  margin: 5px 10px;
  float: left; }

.dropdown-messages .message-body {
  margin: 5px;
  float: left;
  width: 280px; }

.dropdown small {
  color: #999; }

.dropdown em {
  margin: 0 5px; }

.dropdown-menu > li > a {
  padding: 5px 10px; }

.dropdown-menu li .message-body a {
  color: #444; }

.dropdown-menu li a:hover {
  color: #30a5ff;
  text-decoration: none;
  background: none; }

.divider, .clear {
  clear: both; }

.dropdown-alerts {
  border: 1px solid #fff;
  width: 260px;
  background: rgba(255, 255, 255, 0.9);
  color: #444;
  font-size: 0.9em; }

.all-button a {
  text-align: center;
  color: #444;
  font-size: 12px;
  text-transform: uppercase;
  display: block; }

a.btn:hover, button:hover {
  opacity: 0.8; }

a.btn:active, button:active {
  box-shadow: inset 0px 0px 500px rgba(0, 0, 0, 0.1);
  opacity: 1; }

.btn-default, .btn-default:hover, .btn-default:focus, .btn-default:active, .btn-default.active, .open > .dropdown-toggle.btn-default, .btn-default.disabled, .btn-default[disabled], fieldset[disabled] .btn-default, .btn-default.disabled:hover, .btn-default[disabled]:hover, fieldset[disabled] .btn-default:hover, .btn-default.disabled:focus, .btn-default[disabled]:focus, fieldset[disabled] .btn-default:focus, .btn-default.disabled:active, .btn-default[disabled]:active, fieldset[disabled] .btn-default:active, .btn-default.disabled.active, .btn-default[disabled].active, fieldset[disabled] .btn-default.active {
  background-color: #e9ecf2;
  border-color: #e9ecf2;
  color: #1b3548; }

.btn-primary, .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary, .btn-primary.disabled, .btn-primary[disabled], fieldset[disabled] .btn-primary, .btn-primary.disabled:hover, .btn-primary[disabled]:hover, fieldset[disabled] .btn-primary:hover, .btn-primary.disabled:focus, .btn-primary[disabled]:focus, fieldset[disabled] .btn-primary:focus, .btn-primary.disabled:active, .btn-primary[disabled]:active, fieldset[disabled] .btn-primary:active, .btn-primary.disabled.active, .btn-primary[disabled].active, fieldset[disabled] .btn-primary.active {
  background-color: #30a5ff;
  border-color: #30a5ff; }

.btn-success, .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active, .open > .dropdown-toggle.btn-success, .btn-success.disabled, .btn-success[disabled], fieldset[disabled] .btn-success, .btn-success.disabled:hover, .btn-success[disabled]:hover, fieldset[disabled] .btn-success:hover, .btn-success.disabled:focus, .btn-success[disabled]:focus, fieldset[disabled] .btn-success:focus, .btn-success.disabled:active, .btn-success[disabled]:active, fieldset[disabled] .btn-success:active, .btn-success.disabled.active, .btn-success[disabled].active, fieldset[disabled] .btn-success.active {
  background-color: #8ad919;
  border-color: #8ad919; }

.btn-warning, .btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active, .open > .dropdown-toggle.btn-warning, .btn-warning.disabled, .btn-warning[disabled], fieldset[disabled] .btn-warning, .btn-warning.disabled:hover, .btn-warning[disabled]:hover, fieldset[disabled] .btn-warning:hover, .btn-warning.disabled:focus, .btn-warning[disabled]:focus, fieldset[disabled] .btn-warning:focus, .btn-warning.disabled:active, .btn-warning[disabled]:active, fieldset[disabled] .btn-warning:active, .btn-warning.disabled.active, .btn-warning[disabled].active, fieldset[disabled] .btn-warning.active {
  background-color: #ffb53e;
  border-color: #ffb53e; }

.btn-danger, .btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active, .open > .dropdown-toggle.btn-danger, .btn-danger.disabled, .btn-danger[disabled], fieldset[disabled] .btn-danger, .btn-danger.disabled:hover, .btn-danger[disabled]:hover, fieldset[disabled] .btn-danger:hover, .btn-danger.disabled:focus, .btn-danger[disabled]:focus, fieldset[disabled] .btn-danger:focus, .btn-danger.disabled:active, .btn-danger[disabled]:active, fieldset[disabled] .btn-danger:active, .btn-danger.disabled.active, .btn-danger[disabled].active, fieldset[disabled] .btn-danger.active {
  background-color: #f9243f;
  border-color: #f9243f; }

.btn-link, .page-link, .text-primary {
  color: #30a5ff !important; }

.btn-link:focus, .btn-link:hover, .page-link:focus, .page-link:hover, a.text-primary:focus, a.text-primary:hover {
  color: #50b3ff !important; }

.bg-primary {
  color: #1b3548;
  background-color: #e9ecf2; }

a.bg-primary:hover {
  background-color: #e9ecf2; }

.bg-success, .bg-green {
  color: #fff;
  background-color: #8ad919; }

a.bg-success:hover, a.bg-green:hover {
  background-color: #8ad919; }

.bg-success a, .bg-green a {
  color: rgba(255, 255, 255, 0.75); }

.bg-teal {
  color: #fff;
  background-color: #1ebfae; }

a.bg-teal:hover {
  background-color: #1ebfae; }

.bg-teal a {
  color: rgba(255, 255, 255, 0.75); }

.bg-info, .bg-blue {
  color: #fff;
  background-color: #30a5ff; }

a.bg-info:hover, a.bg-blue:hover {
  background-color: #30a5ff; }

.bg-info a, .bg-blue a {
  color: rgba(255, 255, 255, 0.75); }

.bg-warning, .bg-orange {
  color: #fff;
  background-color: #ffb53e; }

a.bg-warning:hover, a.bg-orange:hover {
  background-color: #ffb53e; }

.bg-warning a, .bg-orange a {
  color: rgba(255, 255, 255, 0.75); }

.bg-danger, .bg-red {
  color: #fff;
  background-color: #f9243f; }

a.bg-danger:hover, a.bg-red:hover {
  background-color: #f9243f; }

.bg-danger a, .bg-red a {
  color: rgba(255, 255, 255, 0.75); }

a.label:hover, a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer; }

.label:empty {
  display: none; }

.btn .label {
  position: relative;
  top: -1px; }

.label-default {
  background-color: #777; }

.label-default[href]:hover, .label-default[href]:focus {
  background-color: #5e5e5e; }

.label-primary {
  color: #1b3548;
  background-color: #e9ecf2; }

.label-primary[href]:hover, .label-primary[href]:focus {
  background-color: #e9ecf2; }

.label-success {
  background-color: #8ad919; }

.label-success[href]:hover, .label-success[href]:focus {
  background-color: #8ad919; }

.label-info {
  background-color: #30a5ff; }

.label-info[href]:hover, .label-info[href]:focus {
  background-color: #30a5ff; }

.label-warning {
  background-color: #ffb53e; }

.label-warning[href]:hover, .label-warning[href]:focus {
  background-color: #ec971f; }

.label-danger {
  background-color: #f9243f; }

.label-danger[href]:hover, .label-danger[href]:focus {
  background-color: #f9243f; }

.panel {
  border: 0; }

.panel-container {
  padding-top: 20px; }

.panel-heading .fa-toggle-up, .panel-heading .fa-toggle-down {
  font-size: 17px; }

.panel-primary > .panel-heading {
  background-color: #30a5ff;
  color: #fff;
  border: none; }

.panel-success > .panel-heading {
  background-color: #8ad919;
  color: #fff;
  border: none; }

.panel-info > .panel-heading {
  background-color: #30a5ff;
  color: #fff;
  border: none; }

.panel-warning > .panel-heading {
  background-color: #ffb53e;
  color: #fff;
  border: none; }

.panel-danger > .panel-heading {
  background-color: #f9243f;
  color: #fff;
  border: none; }

.panel-primary .panel-settings, .panel-primary .panel-toggle, .panel-success .panel-settings, .panel-success .panel-toggle, .panel-info .panel-settings, .panel-info .panel-toggle, .panel-warning .panel-settings, .panel-warning .panel-toggle, .panel-danger .panel-settings, .panel-danger .panel-toggle {
  border: none;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.2); }

.panel-primary .panel-settings:hover, .panel-primary .panel-toggle:hover, .panel-success .panel-settings:hover, .panel-success .panel-toggle:hover, .panel-info .panel-settings:hover, .panel-info .panel-toggle:hover, .panel-warning .panel-settings:hover, .panel-warning .panel-toggle:hover, .panel-danger .panel-settings:hover, .panel-danger .panel-toggle:hover {
  border: none;
  color: #fff;
  background-color: rgba(255, 255, 255, 0.4); }

.panel-blue {
  background: #30a5ff;
  color: #fff; }

.panel-teal {
  background: #1ebfae;
  color: #fff; }

.panel-orange {
  background: #ffb53e;
  color: #fff; }

.panel-red {
  background: #f9243f;
  color: #fff; }

.dark-overlay {
  background: rgba(0, 0, 0, 0.05); }

.panel-blue p, .panel-teal p, .panel-orange p, .panel-red p {
  color: rgba(255, 255, 255, 0.75); }

.panel-heading {
  font-size: 20px;
  font-weight: 300;
  letter-spacing: 0.025em;
  height: 60px;
  line-height: 38px; }

.panel-default .panel-heading {
  background: #fff;
  border-bottom: 1px solid #e9ecf2;
  color: #444444; }

.panel-footer {
  background: #fff;
  border-top: 1px solid #e9ecf2; }

.panel-widget {
  padding: 10px 0;
  position: relative;
  box-shadow: none;
  border-radius: 0;
  background: none;
  text-align: center;
  color: #333; }

.panel-widget .panel-footer {
  border: 0;
  text-align: center; }

.panel-footer .input-group {
  padding: 0px;
  margin: 0 -5px; }

.panel-footer .input-group-btn:last-child > .btn, .panel-footer .input-group-btn:last-child > .btn-group {
  margin: 0; }

.panel-widget .panel-footer a {
  color: #999; }

.panel-widget .panel-footer a:hover {
  color: #666;
  text-decoration: none; }

.panel-widget .text-muted {
  margin-top: -6px;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 0.8em; }

.panel-widget .large {
  color: #373b45;
  font-size: 3em; }

.panel-settings {
  list-style: none;
  padding: 0;
  margin: 0; }

.panel-settings .dropdown a.dropdown-toggle, .panel-settings a {
  padding: 0;
  background: none;
  color: #7c7c7c; }

.panel-settings a, .panel-toggle {
  width: 40px;
  padding: 2px 0 0 0; }

.panel-settings:hover, .panel-toggle:hover, .panel-settings .dropdown a.dropdown-toggle:hover, .panel-settings:active, .panel-toggle:active, .panel-settings .dropdown a.dropdown-toggle:active, .panel-settings:focus, .panel-toggle:focus, .panel-settings .dropdown a.dropdown-toggle:focus {
  background: #f1f4f7;
  color: #444444; }

.panel-settings, .panel-toggle {
  display: inline-block;
  margin: -1px -5px 0 15px !important;
  border-radius: 4px;
  text-align: center;
  border: 1px solid #e9ecf2;
  color: #7c7c7c;
  background: #fff;
  width: 42px; }

.panel-settings {
  width: 42px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px; }

.panel-settings li.dropdown {
  margin: 0;
  padding: 0; }

.dropdown-settings {
  border: 1px solid #fff;
  width: 220px;
  font-size: 0.9em;
  padding: 0; }

.dropdown-settings li {
  list-style: none;
  padding: 0 10px;
  width: 220px;
  height: 26px;
  line-height: 26px; }

.dropdown-settings .divider {
  margin: 7px 0; }

.dropdown-settings li a {
  padding: 0;
  margin: 0;
  display: inline-block;
  width: 100%;
  color: #444444; }

.clickable {
  cursor: pointer; }

.panel-heading span {
  margin: 0px;
  font-size: 14px; }

.panel-button-tab-right {
  margin-left: 4px !important;
  border-top-left-radius: 0;
  border-bottom-left-radius: 0; }

.panel-button-tab-left {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0; }

.border-top {
  border-top: 1px solid #dadbda; }

.border-right {
  border-right: 1px solid #dadbda; }

.border-bottom {
  border-bottom: 1px solid #dadbda; }

.border-left {
  border-left: 1px solid #dadbda; }

.panel .border-top, .panel .border-right, .panel .border-bottom, .panel .border-left {
  border-color: #e9ecf2; }

.article {
  padding: 10px 0; }

.article:first-child {
  padding: 0 0 10px 0; }

.article h4 {
  margin-bottom: 10px; }

.article .date {
  text-align: center;
  margin: 5px auto;
  display: block; }

.article .date .text-muted {
  margin-top: -5px; }

.timeline {
  list-style: none;
  padding: 20px 0 20px;
  position: relative; }

.timeline:before {
  top: 0;
  bottom: 0;
  position: absolute;
  content: " ";
  width: 2px;
  background-color: #e9ecf2;
  left: 25px;
  margin-right: -1.5px; }

.timeline > li {
  margin-bottom: 20px;
  position: relative; }

.timeline > li:before, .timeline > li:after {
  content: " ";
  display: table; }

.timeline > li:after {
  clear: both; }

.timeline > li > .timeline-panel {
  width: calc( 100% - 65px );
  float: right;
  border: 1px solid #edeeed;
  border-radius: 2px;
  padding: 10px 20px;
  position: relative;
  box-shadow: none; }

.timeline > li > .timeline-panel:before {
  position: absolute;
  top: 26px;
  left: -11px;
  display: inline-block;
  border-top: 11px solid transparent;
  border-right: 11px solid #edeeed;
  border-left: 0 solid #edeeed;
  border-bottom: 11px solid transparent;
  content: " "; }

.timeline > li > .timeline-panel:after {
  position: absolute;
  top: 27px;
  left: -10px;
  display: inline-block;
  border-top: 10px solid transparent;
  border-right: 10px solid #fff;
  border-left: 0 solid #fff;
  border-bottom: 10px solid transparent;
  content: " "; }

.timeline > li > .timeline-badge {
  color: #fff;
  width: 46px;
  height: 46px;
  line-height: 51px;
  font-size: 1.4em;
  text-align: center;
  position: absolute;
  top: 16px;
  left: 0px;
  margin-right: -25px;
  background-color: #999999;
  z-index: 100;
  border-radius: 9999px; }

.timeline-badge.primary {
  background-color: #30a5ff !important; }

.timeline-badge.success {
  background-color: #8ad919 !important; }

.timeline-badge.warning {
  background-color: #ffb53e !important; }

.timeline-badge.danger {
  background-color: #f9243f !important; }

.timeline-badge.info {
  background-color: #30a5ff !important; }

.progress {
  height: 12px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f2f3f2;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1); }

.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #30a5ff;
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.1);
  -webkit-transition: width .6s ease;
  transition: width .6s ease; }

.progress-bar-success {
  background-color: #8ad919;
  background-image: none; }

.progress-bar-info, .progress-bar-blue {
  background-color: #30a5ff;
  background-image: none; }

.progress-bar-warning, .progress-bar-orange {
  background-color: #ffb53e;
  background-image: none; }

.progress-bar-danger, .progress-bar-red {
  background-color: #f9243f;
  background-image: none; }

.progress-bar-teal {
  background-color: #1ebfae;
  background-image: none; }

.jumbotron {
  background: #fff;
  border-bottom: 1px solid #e9ecf2;
  color: #444444; }

.panel .tabs {
  margin: 0;
  padding: 0; }

.nav-tabs {
  background: #f2f3f2;
  border: 0; }

.nav-tabs li a:hover {
  background: #fff; }

.nav-tabs li a, .nav-tabs li a:hover, .nav-tabs li.active a, .nav-tabs li.active a:hover {
  border: 0;
  padding: 15px 20px; }

.nav-tabs li.active a {
  color: #30a5ff; }

.nav-tabs li a {
  color: #999; }

.nav-pills {
  padding: 15px;
  padding-bottom: 0; }

.nav-pills li a, .nav-pills li a:hover, .nav-pills li.active a, .nav-pills li.active a:hover {
  border: 0;
  padding: 7px 15px; }

.nav-pills li.active a, .nav-pills li.active a:hover {
  background: #30a5ff; }

.tab-content {
  padding: 15px; }

.navbar {
  border: 0; }

.navbar input {
  border: 0;
  background: #444;
  color: #fff; }

.navbar input:focus {
  color: #fff;
  background: #555;
  border: 1px solid #30a5ff;
  outline: 0;
  box-shadow: inset 0px 0px 0px 1px #30a5ff; }

.user-menu {
  display: inline-block;
  margin-top: 14px;
  margin-right: 10px;
  float: right;
  list-style: none;
  padding: 0; }

.user-menu a {
  color: #fff; }

.user-menu a:hover, .user-menu a:focus {
  text-decoration: none; }

.sidebar {
  display: block;
  padding: 0;
  display: none;
  box-shadow: none;
  background: #fff; }

.sidebar ul {
  margin: 20px 0px; }

.sidebar form {
  padding: 10px 0 0 0;
  margin: 10px 10px 20px 10px; }

@media (min-width: 768px) {
  .sidebar {
    display: block;
    position: fixed;
    top: 60px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    overflow-y: auto; }

  .navbar-header {
    width: 100%; } }
.sidebar ul.nav a:hover, .sidebar ul.nav li.parent ul li a:hover {
  text-decoration: none;
  background-color: #30a5ff;
  color: #fff; }

.sidebar ul.nav .active a, .sidebar ul.nav li.parent a.active, .sidebar ul.nav .active > a:hover, .sidebar ul.nav li.parent a.active:hover, .sidebar ul.nav .active > a:focus, .sidebar ul.nav li.parent a.active:focus {
  color: #fff;
  background-color: #30a5ff; }

.sidebar ul.nav ul, .sidebar ul.nav ul li {
  list-style: none;
  list-style-type: none; }

.sidebar ul.nav li a {
  height: 50px;
  font-size: 15px;
  line-height: 2em;
  color: #444444; }

.sidebar ul.nav ul.children {
  width: auto;
  padding: 0;
  margin: 0;
  background: #f9f9f9; }

.sidebar ul.nav ul.children li a {
  height: 40px;
  background: #f1f4f7;
  color: #444444; }

.sidebar ul.nav li.current a {
  background-color: #30a5ff;
  color: #fff !important; }

.sidebar ul.nav li.parent ul li a {
  border: none;
  display: block;
  padding-left: 30px;
  line-height: 40px;
  border-radius: 0; }

.sidebar ul.nav li.divider {
  border-bottom: 1px solid rgba(255, 255, 255, 0.1);
  margin: 0px 0; }

.profile-sidebar {
  padding: 10px 0;
  border-bottom: 1px solid #e9ecf2; }

.indicator {
  width: 10px;
  height: 10px;
  display: inline-block;
  border-radius: 9999px;
  margin-right: 5px; }

.profile-userpic img {
  float: left;
  margin: 10px 0px 0px 15px;
  width: 50px;
  height: 50px;
  border-radius: 9999px !important; }

.profile-usertitle {
  float: left;
  text-align: left;
  margin: 10px 0 0 12px; }

.profile-usertitle-name {
  font-size: 20px;
  margin-bottom: 0px; }

.profile-usertitle-status {
  text-transform: uppercase;
  color: #AAA;
  font-size: 12px;
  font-weight: 600;
  margin-bottom: 15px; }

.breadcrumb {
  border-radius: 0;
  padding: 10px 15px 10px 15px;
  background: #e9ecf2;
  margin: 0; }

h1.page-header {
  margin-top: 20px;
  border-bottom: 0; }

.main-chart {
  background: #fff; }

.easypiechart-panel {
  text-align: center;
  padding: 1px 0;
  margin-bottom: 20px; }

.placeholder h2 {
  margin-bottom: 0px; }

.donut {
  width: 100%; }

.easypiechart {
  position: relative;
  text-align: center;
  width: 120px;
  height: 120px;
  margin: 20px auto 10px auto; }

.easypiechart .percent {
  display: block;
  position: absolute;
  font-size: 26px;
  top: 38px;
  width: 120px; }

#easypiechart-blue .percent {
  color: #30a5ff; }

#easypiechart-teal .percent {
  color: #1ebfae; }

#easypiechart-orange .percent {
  color: #ffb53e; }

#easypiechart-red .percent {
  color: #ef4040; }

#calendar, .datepicker-inline {
  width: 100%; }

#calendar table {
  width: 100%; }

.datepicker-switch {
  font-size: 16px;
  height: 46px !important; }

.datepicker table tr td.old, .datepicker table tr td.new {
  color: #c5c7cc; }

.datepicker table tr td {
  padding: 10px !important; }

.datepicker table tr td.active, .datepicker table tr td.active:hover, .datepicker table tr td.active.disabled, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active:hover, .datepicker table tr td.active:hover:hover, .datepicker table tr td.active.disabled:hover, .datepicker table tr td.active.disabled:hover:hover, .datepicker table tr td.active:focus, .datepicker table tr td.active:hover:focus, .datepicker table tr td.active.disabled:focus, .datepicker table tr td.active.disabled:hover:focus, .datepicker table tr td.active:active, .datepicker table tr td.active:hover:active, .datepicker table tr td.active.disabled:active, .datepicker table tr td.active.disabled:hover:active, .datepicker table tr td.active.active, .datepicker table tr td.active:hover.active, .datepicker table tr td.active.disabled.active, .datepicker table tr td.active.disabled:hover.active, .open .dropdown-toggle.datepicker table tr td.active, .open .dropdown-toggle.datepicker table tr td.active:hover, .open .dropdown-toggle.datepicker table tr td.active.disabled, .open .dropdown-toggle.datepicker table tr td.active.disabled:hover {
  color: #ffffff;
  background-color: #30a5ff;
  text-shadow: none;
  border-color: #285e8e; }

.datepicker table tr td span:hover, .datepicker thead tr:first-child th:hover, .datepicker tfoot tr th:hover, .datepicker table tr td.day:hover, .datepicker table tr td.day.focused {
  background: rgba(0, 0, 0, 0.05); }

.todo-list {
  padding: 0;
  margin: -15px;
  background: #fff;
  color: #444444; }

.todo-list .checkbox input[type=checkbox] {
  margin: 0; }

.todo-list .checkbox {
  display: inline-block;
  margin: 0px; }

.panel-body input[type=checkbox]:checked + label {
  text-decoration: line-through;
  color: #777; }

.todo-list-item {
  list-style: none;
  line-height: 0.9;
  padding: 14px 15px 8px 15px; }

.todo-list-item:hover, a.todo-list-item:focus {
  text-decoration: none;
  background-color: #f6f6f6; }

.todo-list .fa-trash {
  color: #444444; }

.todo-list .fa-trash:hover {
  color: #ef4040; }

.chat .panel-body ul {
  list-style: none;
  margin: -15px;
  padding: 15px; }

.chat .panel-body ul li {
  margin-bottom: 10px;
  padding: 15px 5px;
  border-bottom: 1px solid #e9ecf2; }

.chat ul li.left .chat-body {
  margin-left: 80px; }

.chat ul li.right .chat-body {
  margin-right: 80px; }

.chat ul li .chat-body p {
  margin: 0; }

.chat .panel-body {
  overflow-y: scroll;
  height: 300px; }

.chat-body small {
  margin-left: 5px; }

.table {
  background: #fff; }

.fixed-table-container {
  border: 1px solid #e9ecf2; }

.fixed-table-container thead th {
  background: #f7f7f8;
  border-color: #ddd;
  color: #444444;
  font-weight: 300;
  font-size: 16px; }

.fixed-table-container tbody td {
  border: 1px solid #e9ecf2; }

.fixed-table-container tbody td:last-child {
  border-right: none; }

.table > thead > tr > th {
  border-bottom: 1px solid #e6e7e8;
  vertical-align: middle;
  height: 50px; }

.fixed-table-pagination .pagination {
  margin-top: 10px;
  margin-bottom: 0px; }

.fixed-table-pagination .pagination-detail {
  margin-top: 20px; }
  
p.back-link {
  text-align: center;
  margin-bottom: 20px;
  font-size: 12px;
  text-transform: uppercase; }


	
</style>





<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Lumino</span>Admin</a>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-envelope"></em><span class="label label-danger">15</span>
					</a>
						<ul class="dropdown-menu dropdown-messages">
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">3 mins ago</small>
										<a href="#"><strong>John Doe</strong> commented on <strong>your photo</strong>.</a>
									<br /><small class="text-muted">1:24 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="dropdown-messages-box"><a href="profile.html" class="pull-left">
									<img alt="image" class="img-circle" src="http://placehold.it/40/30a5ff/fff">
									</a>
									<div class="message-body"><small class="pull-right">1 hour ago</small>
										<a href="#">New message from <strong>Jane Doe</strong>.</a>
									<br /><small class="text-muted">12:27 pm - 25/03/2015</small></div>
								</div>
							</li>
							<li class="divider"></li>
							<li>
								<div class="all-button"><a href="#">
									<em class="fa fa-inbox"></em> <strong>All Messages</strong>
								</a></div>
							</li>
						</ul>
					</li>
					<li class="dropdown"><a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
						<em class="fa fa-bell"></em><span class="label label-info">5</span>
					</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li><a href="#">
								<div><em class="fa fa-envelope"></em> 1 New Message
									<span class="pull-right text-muted small">3 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-heart"></em> 12 New Likes
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
							<li class="divider"></li>
							<li><a href="#">
								<div><em class="fa fa-user"></em> 5 New Followers
									<span class="pull-right text-muted small">4 mins ago</span></div>
							</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Username</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class="active"><a href="index.html"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li><a href="widgets.html"><em class="fa fa-calendar">&nbsp;</em> Widgets</a></li>
			<li><a href="charts.html"><em class="fa fa-bar-chart">&nbsp;</em> Charts</a></li>
			<li><a href="elements.html"><em class="fa fa-toggle-off">&nbsp;</em> UI Elements</a></li>
			<li><a href="panels.html"><em class="fa fa-clone">&nbsp;</em> Alerts &amp; Panels</a></li>
			<li class="parent "><a data-toggle="collapse" href="#sub-item-1">
				<em class="fa fa-navicon">&nbsp;</em> Multilevel <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 1
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 2
					</a></li>
					<li><a class="" href="#">
						<span class="fa fa-arrow-right">&nbsp;</span> Sub Item 3
					</a></li>
				</ul>
			</li>
			<li><a href="login.html"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Dashboard</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Dashboard</h1>
			</div>
		</div><!--/.row-->
		
		<div class="panel panel-container">
			<div class="row">
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-teal panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-shopping-cart color-blue"></em>
							<div class="large">120</div>
							<div class="text-muted">New Orders</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-blue panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-comments color-orange"></em>
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-orange panel-widget border-right">
						<div class="row no-padding"><em class="fa fa-xl fa-users color-teal"></em>
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-md-3 col-lg-3 no-padding">
					<div class="panel panel-red panel-widget ">
						<div class="row no-padding"><em class="fa fa-xl fa-search color-red"></em>
							<div class="large">25.2k</div>
							<div class="text-muted">Page Views</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Site Traffic Overview
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<div class="canvas-wrapper">
							<canvas class="main-chart" id="line-chart" height="200" width="600"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Orders</h4>
						<div class="easypiechart" id="easypiechart-blue" data-percent="92" ><span class="percent">92%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Comments</h4>
						<div class="easypiechart" id="easypiechart-orange" data-percent="65" ><span class="percent">65%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>New Users</h4>
						<div class="easypiechart" id="easypiechart-teal" data-percent="56" ><span class="percent">56%</span></div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-md-3">
				<div class="panel panel-default">
					<div class="panel-body easypiechart-panel">
						<h4>Visitors</h4>
						<div class="easypiechart" id="easypiechart-red" data-percent="27" ><span class="percent">27%</span></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default chat">
					<div class="panel-heading">
						Chat
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
							<li class="right clearfix"><span class="chat-img pull-right">
								<img src="http://placehold.it/60/dde0e6/5f6468" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="pull-left primary-font">Jane Doe</strong> <small class="text-muted">6 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
							<li class="left clearfix"><span class="chat-img pull-left">
								<img src="http://placehold.it/60/30a5ff/fff" alt="User Avatar" class="img-circle" />
								</span>
								<div class="chat-body clearfix">
									<div class="header"><strong class="primary-font">John Doe</strong> <small class="text-muted">32 mins ago</small></div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ante turpis, rutrum ut ullamcorper sed, dapibus ac nunc.</p>
								</div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-chat">Send</button>
						</span></div>
					</div>
				</div>
				<div class="panel panel-default">
					<div class="panel-heading">
						To-do List
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body">
						<ul class="todo-list">
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-1" />
									<label for="checkbox-1">Make coffee</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-2" />
									<label for="checkbox-2">Check emails</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-3" />
									<label for="checkbox-3">Reply to Jane</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-4" />
									<label for="checkbox-4">Make more coffee</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-5" />
									<label for="checkbox-5">Work on the new design</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<input type="checkbox" id="checkbox-6" />
									<label for="checkbox-6">Get feedback on design</label>
								</div>
								<div class="pull-right action-buttons"><a href="#" class="trash">
									<em class="fa fa-trash"></em>
								</a></div>
							</li>
						</ul>
					</div>
					<div class="panel-footer">
						<div class="input-group">
							<input id="btn-input" type="text" class="form-control input-md" placeholder="Add new task" /><span class="input-group-btn">
								<button class="btn btn-primary btn-md" id="btn-todo">Add</button>
						</span></div>
					</div>
				</div>
			</div><!--/.col-->
			
			
			<div class="col-md-6">
				<div class="panel panel-default ">
					<div class="panel-heading">
						Timeline
						<ul class="pull-right panel-settings panel-button-tab-right">
							<li class="dropdown"><a class="pull-right dropdown-toggle" data-toggle="dropdown" href="#">
								<em class="fa fa-cogs"></em>
							</a>
								<ul class="dropdown-menu dropdown-menu-right">
									<li>
										<ul class="dropdown-settings">
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 1
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 2
											</a></li>
											<li class="divider"></li>
											<li><a href="#">
												<em class="fa fa-cog"></em> Settings 3
											</a></li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span></div>
					<div class="panel-body timeline-container">
						<ul class="timeline">
							<li>
								<div class="timeline-badge"><em class="glyphicon glyphicon-pushpin"></em></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge primary"><em class="glyphicon glyphicon-link"></em></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><em class="glyphicon glyphicon-camera"></em></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer at sodales nisl. Donec malesuada orci ornare risus finibus feugiat.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="timeline-badge"><em class="glyphicon glyphicon-paperclip"></em></div>
								<div class="timeline-panel">
									<div class="timeline-heading">
										<h4 class="timeline-title">Lorem ipsum dolor sit amet</h4>
									</div>
									<div class="timeline-body">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div><!--/.col-->
			<div class="col-sm-12">
				<p class="back-link">Lumino Theme by <a href="https://www.medialoot.com">Medialoot</a></p>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	<script>
		window.onload = function () {
	var chart1 = document.getElementById("line-chart").getContext("2d");
	window.myLine = new Chart(chart1).Line(lineChartData, {
	responsive: true,
	scaleLineColor: "rgba(0,0,0,.2)",
	scaleGridLineColor: "rgba(0,0,0,.05)",
	scaleFontColor: "#c5c7cc"
	});
};
	</script>
		
</body>
</html>