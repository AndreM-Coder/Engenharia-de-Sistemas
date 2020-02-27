<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:exslt="http://exslt.org/common"
  xmlns:php="http://php.net/xsl"
  exclude-result-prefixes="php exslt">

  <xsl:output method="xml" encoding="UTF-8" omit-xml-declaration="yes" indent="yes"/>

  <xsl:include href="page.c.xsl"/>

  <xsl:template name="users" match="users">
    <div class="centralbody">
      <h1>Índice</h1>
      <p>
        Esta é a página de índice.
      </p>
      <xsl:for-each select="user">
        <p><xsl:value-of select="@username"/> - <xsl:value-of select="@name"/></p>
      </xsl:for-each>
    </div>
  </xsl:template>

</xsl:stylesheet>