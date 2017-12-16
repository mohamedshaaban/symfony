<?php

/* @SyliusUi/_stylesheets.html.twig */
class __TwigTemplate_343a0bf89043c0659f2cd7e4d124cca3c3f758023b2f0e0d257ee1bb04c68a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2a748812c217176304abcdf2e9cefa31571ba174d47974624eb74583e7b69948 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a748812c217176304abcdf2e9cefa31571ba174d47974624eb74583e7b69948->enter($__internal_2a748812c217176304abcdf2e9cefa31571ba174d47974624eb74583e7b69948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        $__internal_09f1fd53dae0783ec20b5a35d0655b759d76952cc671a92cb6767cd2edb95001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09f1fd53dae0783ec20b5a35d0655b759d76952cc671a92cb6767cd2edb95001->enter($__internal_09f1fd53dae0783ec20b5a35d0655b759d76952cc671a92cb6767cd2edb95001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusUi/_stylesheets.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_2a748812c217176304abcdf2e9cefa31571ba174d47974624eb74583e7b69948->leave($__internal_2a748812c217176304abcdf2e9cefa31571ba174d47974624eb74583e7b69948_prof);

        
        $__internal_09f1fd53dae0783ec20b5a35d0655b759d76952cc671a92cb6767cd2edb95001->leave($__internal_09f1fd53dae0783ec20b5a35d0655b759d76952cc671a92cb6767cd2edb95001_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusUi/_stylesheets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<link rel=\"stylesheet\" href=\"{{ asset(path) }}\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
", "@SyliusUi/_stylesheets.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Resources\\views\\_stylesheets.html.twig");
    }
}
