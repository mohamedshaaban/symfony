<?php

/* SyliusAdminBundle:Order/Grid/Field:customer.html.twig */
class __TwigTemplate_a5e4de17853589e8e3a56440240bd6338d1d965c6d1b6e5c2ca89689049a3c69 extends Twig_Template
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
        $__internal_b597b135de1b0c072b5b6fd08bd05d9442327998a11abd672f72604d723c7ded = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b597b135de1b0c072b5b6fd08bd05d9442327998a11abd672f72604d723c7ded->enter($__internal_b597b135de1b0c072b5b6fd08bd05d9442327998a11abd672f72604d723c7ded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig"));

        $__internal_0adaacb1f759188a4e18fc39fca1dece46c6a0742cc850308728ec45023edf7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0adaacb1f759188a4e18fc39fca1dece46c6a0742cc850308728ec45023edf7b->enter($__internal_0adaacb1f759188a4e18fc39fca1dece46c6a0742cc850308728ec45023edf7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig"));

        // line 1
        echo "<strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 1, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</strong>
<p>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new Twig_Error_Runtime('Variable "data" does not exist.', 2, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_b597b135de1b0c072b5b6fd08bd05d9442327998a11abd672f72604d723c7ded->leave($__internal_b597b135de1b0c072b5b6fd08bd05d9442327998a11abd672f72604d723c7ded_prof);

        
        $__internal_0adaacb1f759188a4e18fc39fca1dece46c6a0742cc850308728ec45023edf7b->leave($__internal_0adaacb1f759188a4e18fc39fca1dece46c6a0742cc850308728ec45023edf7b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Grid/Field:customer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<strong>{{ data.firstName }} {{ data.lastName }}</strong>
<p>{{ data.email }}</p>
", "SyliusAdminBundle:Order/Grid/Field:customer.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Grid/Field/customer.html.twig");
    }
}
