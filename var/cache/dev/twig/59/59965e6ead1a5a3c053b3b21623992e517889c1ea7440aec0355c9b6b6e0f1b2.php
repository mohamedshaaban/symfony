<?php

/* @SyliusAdmin/Product/Grid/Field/image.html.twig */
class __TwigTemplate_604f6e2c043ec4f460e19ee6bef190a4acc6267bf096c918fc89a08d87550ba4 extends Twig_Template
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
        $__internal_0b479c1da7e45042bf1b4beb03175150bb459a30e57a389826affc3617828574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b479c1da7e45042bf1b4beb03175150bb459a30e57a389826affc3617828574->enter($__internal_0b479c1da7e45042bf1b4beb03175150bb459a30e57a389826affc3617828574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Field/image.html.twig"));

        $__internal_ceef77e13795f724aa453b4624f4d2d412cc645f44f52296a4a946dc72ed0d4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceef77e13795f724aa453b4624f4d2d412cc645f44f52296a4a946dc72ed0d4a->enter($__internal_ceef77e13795f724aa453b4624f4d2d412cc645f44f52296a4a946dc72ed0d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusAdmin/Product/Grid/Field/image.html.twig"));

        // line 1
        $this->loadTemplate("@SyliusAdmin/Product/_mainImage.html.twig", "@SyliusAdmin/Product/Grid/Field/image.html.twig", 1)->display(array_merge($context, array("product" => (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_0b479c1da7e45042bf1b4beb03175150bb459a30e57a389826affc3617828574->leave($__internal_0b479c1da7e45042bf1b4beb03175150bb459a30e57a389826affc3617828574_prof);

        
        $__internal_ceef77e13795f724aa453b4624f4d2d412cc645f44f52296a4a946dc72ed0d4a->leave($__internal_ceef77e13795f724aa453b4624f4d2d412cc645f44f52296a4a946dc72ed0d4a_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusAdmin/Product/Grid/Field/image.html.twig";
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
        return new Twig_Source("{% include '@SyliusAdmin/Product/_mainImage.html.twig' with {'product': data} %}
", "@SyliusAdmin/Product/Grid/Field/image.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\Resources\\views\\Product\\Grid\\Field\\image.html.twig");
    }
}
