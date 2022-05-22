<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.blankbook
 *
 * @copyright   (C) 2022 Md Siddiqur Rahman. <https://siddiqur.com>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

?>
<!doctype html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <jdoc:include type="metas" />
    <jdoc:include type="scripts" />
    <jdoc:include type="styles" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <h1>Joomla 4 Bootstrap 5 Blank Template</h1>
    <jdoc:include type="message" />
    <jdoc:include type="component" />
    <jdoc:include type="modules" name="debug" style="none" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>