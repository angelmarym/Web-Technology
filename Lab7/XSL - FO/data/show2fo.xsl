    <xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">
    
    <xsl:template match="/">
        <fo:root>
            <fo:layout-master-set>
                <fo:simple-page-master master-name="page" page-width="8.5in" page-height="11in" margin-top="0.5in" margin-bottom="0.5in" margin-left="0.5in" margin-right="0.5in">
                    <fo:region-body region-name="body" margin-top="0.5in" margin-bottom="0.5in" margin-left="0.5in" margin-right="0.5in"/>
                </fo:simple-page-master>
            </fo:layout-master-set>
            <fo:page-sequence master-reference="page">
                <fo:flow flow-name="body">
                    <xsl:apply-templates/>
                </fo:flow>
            </fo:page-sequence>
        </fo:root>
    </xsl:template>

    <xsl:template match="items">
        <fo:block space-before="6pt" border-top="3pt solid green">
            <fo:table>
                <fo:table-body>
                    <xsl:apply-templates/>
                </fo:table-body>
            </fo:table>
        </fo:block>
    </xsl:template>
    <xsl:template match="title" >
        <fo:table-row>
            <xsl:apply-templates select="@*"/>
        </fo:table-row>
    </xsl:template>

    <xsl:template match="@Id | @name | @gender | @age">
        <fo:table-cell border="1pt solid black" text-align="center" color="red" background-color = "yellow">
            <fo:block font-weight="bold">
                <xsl:value-of select="."/>
            </fo:block>
        </fo:table-cell>
    </xsl:template>


    <xsl:template match="@ID | @Name | @Gender">
        <fo:table-cell border="1pt solid black" text-align="center" color="purple" background-color = "orange">
            <fo:block font-style="italic">
                <xsl:value-of select="."/>
            </fo:block>
        </fo:table-cell>
    </xsl:template>

    <xsl:template match="@id | @nname | @ngender">
        <fo:table-cell border="1pt solid black" text-align="center" color="blue" background-color = "gold">
            <fo:block>
                <xsl:value-of select="."/>
            </fo:block>
        </fo:table-cell>
    </xsl:template>
</xsl:stylesheet>