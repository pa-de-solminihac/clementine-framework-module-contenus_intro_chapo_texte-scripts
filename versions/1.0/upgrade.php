<?php
/**
 * Script non interactif d'installation du module utilisateurs
 */

$sql = <<<SQL

--
-- Table `clementine_cms_contenu_html_intro_chapo_texte`
--

CREATE  TABLE IF NOT EXISTS `clementine_cms_contenu_html_intro_chapo_texte` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `contenu_html` text NOT NULL,
  `contenu_html_chapo` text NOT NULL,
  `contenu_html_intro_chapo_texte` text NOT NULL,
  `lang` char(2) NOT NULL DEFAULT 'fr',
  PRIMARY KEY (`id`,`lang`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

SQL;

$db->query($sql);
?>
<pre>
<strong>Création de la table "clementine_cms_contenu_html_intro_chapo_texte" terminée</strong>
</pre>
<?php
return true;
?>
