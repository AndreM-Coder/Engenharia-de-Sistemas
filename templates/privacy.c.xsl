<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
  xmlns:exslt="http://exslt.org/common"
  xmlns:php="http://php.net/xsl"
  exclude-result-prefixes="php exslt">

  <xsl:output method="xml" encoding="UTF-8" omit-xml-declaration="yes" indent="yes"/>

  <xsl:include href="page.c.xsl"/>

  <xsl:template name="privacy" match="privacy">
    <div>
      <h1>Política de privacidade</h1>
      <p>
        Esta é a página da política de privacidade.
      </p>
      <p>
        Ao contrário do Facebook, nós somos honestos e dizemos já que vamos vender todos os seus dados.
      </p>
    </div>
  </xsl:template>

</xsl:stylesheet>