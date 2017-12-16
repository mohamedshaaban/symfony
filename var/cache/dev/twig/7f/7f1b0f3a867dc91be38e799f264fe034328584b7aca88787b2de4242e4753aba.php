<?php

/* SyliusAdminBundle:Locale/Grid/Field:name.html.twig */
class __TwigTemplate_642f391d2837455f0f958967bbc8504f6ec985dfbf5f46e7129c1e638e2722a5 extends Twig_Template
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
        $__internal_ae52a14d9718d1d1443ea2e8e08ad162c0ebfce1cf04eddfacd5444d483bc4bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae52a14d9718d1d1443ea2e8e08ad162c0ebfce1cf04eddfacd5444d483bc4bf->enter($__internal_ae52a14d9718d1d1443ea2e8e08ad162c0ebfce1cf04eddfacd5444d483bc4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig"));

        $__internal_d90b2088d4726cc948a66df19fd9e6ec1b84f9c3b98890e30e72dbcb53a1ce15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d90b2088d4726cc948a66df19fd9e6ec1b84f9c3b98890e30e72dbcb53a1ce15->enter($__internal_d90b2088d4726cc948a66df19fd9e6ec1b84f9c3b98890e30e72dbcb53a1ce15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig"));

        // line 1
        echo "<i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "code", array()), 3, 2)), "html", null, true);
        echo " flag\"></i> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "code", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "name", array()), "html", null, true);
        echo "
";
        
        $__internal_ae52a14d9718d1d1443ea2e8e08ad162c0ebfce1cf04eddfacd5444d483bc4bf->leave($__internal_ae52a14d9718d1d1443ea2e8e08ad162c0ebfce1cf04eddfacd5444d483bc4bf_prof);

        
        $__internal_d90b2088d4726cc948a66df19fd9e6ec1b84f9c3b98890e30e72dbcb53a1ce15->leave($__internal_d90b2088d4726cc948a66df19fd9e6ec1b84f9c3b98890e30e72dbcb53a1ce15_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Locale/Grid/Field:name.html.twig";
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
        return new Twig_Source("<i class=\"{{ data.code|slice(3, 2)|lower }} flag\"></i> {{ data.code }} {{ data.name }}
", "SyliusAdminBundle:Locale/Grid/Field:name.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Locale/Grid/Field/name.html.twig");
    }
}
