<?php

/* SyliusUiBundle::_stylesheets.html.twig */
class __TwigTemplate_9672046ad0eb069688c910c88fa49ef5dd8875092677b6dc459623fcc3f87b11 extends Twig_Template
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
        $__internal_0622978f12aa2cb928d0e43f7413569c98c9186591e3c165ae57943626d40430 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0622978f12aa2cb928d0e43f7413569c98c9186591e3c165ae57943626d40430->enter($__internal_0622978f12aa2cb928d0e43f7413569c98c9186591e3c165ae57943626d40430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_stylesheets.html.twig"));

        $__internal_a41dbee2fdcdfe696d8e39fa1a0570ed85633f5c6d9b1f65d7691eb931a1d978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41dbee2fdcdfe696d8e39fa1a0570ed85633f5c6d9b1f65d7691eb931a1d978->enter($__internal_a41dbee2fdcdfe696d8e39fa1a0570ed85633f5c6d9b1f65d7691eb931a1d978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusUiBundle::_stylesheets.html.twig"));

        // line 1
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((isset($context["path"]) || array_key_exists("path", $context) ? $context["path"] : (function () { throw new Twig_Error_Runtime('Variable "path" does not exist.', 1, $this->getSourceContext()); })())), "html", null, true);
        echo "\">

<!--[if lt IE 9]>
<script src=\"https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js\"></script>
<script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
<![endif]-->
";
        
        $__internal_0622978f12aa2cb928d0e43f7413569c98c9186591e3c165ae57943626d40430->leave($__internal_0622978f12aa2cb928d0e43f7413569c98c9186591e3c165ae57943626d40430_prof);

        
        $__internal_a41dbee2fdcdfe696d8e39fa1a0570ed85633f5c6d9b1f65d7691eb931a1d978->leave($__internal_a41dbee2fdcdfe696d8e39fa1a0570ed85633f5c6d9b1f65d7691eb931a1d978_prof);

    }

    public function getTemplateName()
    {
        return "SyliusUiBundle::_stylesheets.html.twig";
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
", "SyliusUiBundle::_stylesheets.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle/Resources/views/_stylesheets.html.twig");
    }
}
