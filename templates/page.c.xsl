<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:exslt="http://exslt.org/common"
  xmlns:php="http://php.net/xsl"
  exclude-result-prefixes="xsl exslt">
  <xsl:output method="xml" encoding="UTF-8" omit-xml-declaration="yes" indent="yes"/>

  <xsl:template name="page" match="page">
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
      <head>
        <title>Site de exemplo</title>
        <meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
        <link rel="icon" href="../images/favicon.png" type="image/png" sizes="16x16"/>
        <link href="../styles/style.c.css" type="text/css" rel="stylesheet" />
        <script type="text/javascript" src="../scripts/scripts.c.js">/**/</script>
      </head>

      <body>
        <table id="main">
          <tbody>
            <tr>
              <td>&#160;</td>
            </tr>
            <tr id="header">
              <td>
                <nav>
                  <a href="/">Início</a>
                  <a href="/page.php/pagina1">Página1</a>
                  <a href="/page.php/pagina2">Página2</a>
                  <a href="/page.php/pagina3">Página3</a>
                  <a href="/page.php/pagina4">Página4</a>
                </nav>
                <div id="subheader"><!-- --> &#160;</div>
              </td>
            </tr>
            <tr>
              <td id="content">
                <xsl:apply-templates select="./*"/>
              </td>
            </tr>
            <tr id="footer">
              <td>
                <a href="/page/h.page.about">Sobre nós</a>
                <a href="/page/h.page.terms">Termos</a>
                <a href="/page/h.page.contacts">Contactos</a>

                <br/>
                <br/>
                <br/>
                DAIG é uma marca registada
              </td>
            </tr>
          </tbody>
        </table>
      </body>
    </html>
  </xsl:template>

  <xsl:template name="body" match="body">
    <xsl:copy-of select="body/@*|node()"/>
  </xsl:template>
</xsl:stylesheet>
