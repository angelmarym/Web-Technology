<?xml version="1.0" encoding="UTF-8"?>
<html xsl:version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<p>
<center><h1 style="color:#663399">GATEWAYS STUDENTS REGISTRATION DETAILS</h1></center>
<h2 style="color:#9966CC">LIST OF STUDENTS</h2></p>
<body style="font-family:Arial;font-size:12pt;background-color:#45B39D ">
<xsl:for-each select="CHRIST/CS">

  <div style="background-color:teal;color:white;padding:4px">
    <span style="font-weight:bold"><xsl:value-of select="STU-NAME"/> - </span>
    <xsl:value-of select="STU-COLLEGE"/>
    </div>
  <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
    <p>
    <span style="font-style:italic; color:#FF9933"><b>[ Address :  <xsl:value-of select="STU-BRANCH"/> ]</b></span><br />
    <span style="font-style:italic; color:#FF6666"> <b>[ Phone no : <xsl:value-of select="STU-EMAIL"/> ] </b></span>
    </p>
  </div>
</xsl:for-each>
</body>
</html>