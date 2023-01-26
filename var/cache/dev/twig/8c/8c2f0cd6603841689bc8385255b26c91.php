<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* identification/index.html.twig */
class __TwigTemplate_a186e43948bbf074d138b5285ba6c740 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "identification/index.html.twig"));

        // line 2
        echo "{}
<!DOCTYPE html>

<html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Oxygen&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Inter&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display&display=swap\" rel=\"stylesheet\">

    

<link href=\"Asset/trombinoscope.css\" rel=\"stylesheet\" />

</head>

<body>
    <div class=e1_2>
        <div class=e23_69>
        <div class=\"e5_3\"></div><span  class=\"e5_10\">Bienvenue sur le trombinoscope GEFOR</span>
        <div class=e8_39>
        <div class=e5_14>
        <div class=\"e5_11\"></div><span  class=\"e5_13\">Photos</span>
        </div>
        <div class=e5_15>
        <div class=\"e5_16\"></div><span  class=\"e5_17\">Photos</span>
        </div>
        </div>
        </div>
        <div class=e8_70>
        <div class=\"e8_46\"></div><span  class=\"e8_37\">A propos</span><span  class=\"e8_61\">Conditions d’utilisation</span><span  class=\"e8_64\">Contact / Assistance</span><span  class=\"e8_68\">Confidentialité et sécurité</span><span  class=\"e8_69\">Accessibilité</span>
        </div>
        <div class=\"e46_53\"></div>
        <div class=e23_68>
        <div class=e8_40>
        <div class=\"e8_41\"></div><span  class=\"e8_42\">mot de passe</span>
        <div class=\"e8_43\"></div><span  class=\"e8_44\">identifiant</span>
        <div class=\"e8_45\"></div>
        </div>
        <div class=e8_56>
        <div class=\"e8_57\"></div><span  class=\"e8_58\">connexion</span>
        </div>
        <div class=e46_54>
        <div class=\"e46_55\"></div>
        </div>
        </div>
        </div>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "identification/index.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/identification/index.html.twig #}
{}
<!DOCTYPE html>

<html>
<head>
    <link href=\"https://fonts.googleapis.com/css?family=Oxygen&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Inter&display=swap\" rel=\"stylesheet\">
    <link href=\"https://fonts.googleapis.com/css?family=Playfair+Display&display=swap\" rel=\"stylesheet\">

    

<link href=\"Asset/trombinoscope.css\" rel=\"stylesheet\" />

</head>

<body>
    <div class=e1_2>
        <div class=e23_69>
        <div class=\"e5_3\"></div><span  class=\"e5_10\">Bienvenue sur le trombinoscope GEFOR</span>
        <div class=e8_39>
        <div class=e5_14>
        <div class=\"e5_11\"></div><span  class=\"e5_13\">Photos</span>
        </div>
        <div class=e5_15>
        <div class=\"e5_16\"></div><span  class=\"e5_17\">Photos</span>
        </div>
        </div>
        </div>
        <div class=e8_70>
        <div class=\"e8_46\"></div><span  class=\"e8_37\">A propos</span><span  class=\"e8_61\">Conditions d’utilisation</span><span  class=\"e8_64\">Contact / Assistance</span><span  class=\"e8_68\">Confidentialité et sécurité</span><span  class=\"e8_69\">Accessibilité</span>
        </div>
        <div class=\"e46_53\"></div>
        <div class=e23_68>
        <div class=e8_40>
        <div class=\"e8_41\"></div><span  class=\"e8_42\">mot de passe</span>
        <div class=\"e8_43\"></div><span  class=\"e8_44\">identifiant</span>
        <div class=\"e8_45\"></div>
        </div>
        <div class=e8_56>
        <div class=\"e8_57\"></div><span  class=\"e8_58\">connexion</span>
        </div>
        <div class=e46_54>
        <div class=\"e46_55\"></div>
        </div>
        </div>
        </div>
</body>

</html>
", "identification/index.html.twig", "C:\\wamp\\www\\my_PPEtest\\templates\\identification\\index.html.twig");
    }
}
