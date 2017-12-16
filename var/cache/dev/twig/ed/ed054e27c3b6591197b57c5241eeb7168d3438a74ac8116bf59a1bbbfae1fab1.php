<?php

/* SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig */
class __TwigTemplate_ba32984d170c422589697a2d3976e2cabb7c7cfa812a9121f10013611a980a76 extends Twig_Template
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
        $__internal_4d9047be7a78202800985a93484fb3b4ef22bd2dc13697efebc40a4198af54a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d9047be7a78202800985a93484fb3b4ef22bd2dc13697efebc40a4198af54a0->enter($__internal_4d9047be7a78202800985a93484fb3b4ef22bd2dc13697efebc40a4198af54a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig"));

        $__internal_8d51f25529350afc237e98b746a69ad34cccc8d324086b14b6994409b7fb5e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d51f25529350afc237e98b746a69ad34cccc8d324086b14b6994409b7fb5e01->enter($__internal_8d51f25529350afc237e98b746a69ad34cccc8d324086b14b6994409b7fb5e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig"));

        // line 1
        $context["headers"] = $this->loadTemplate("SyliusUiBundle:Macro:headers.html.twig", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        echo $context["headers"]->macro_default(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->getSourceContext()); })()), "fullname", array()), ((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "icon", array()), "cart")) : ("cart")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), ($context["configuration"] ?? null), "vars", array(), "any", false, true), "subheader", array()), "sylius.ui.process_your_orders")) : ("sylius.ui.process_your_orders"))));
        echo "
";
        
        $__internal_4d9047be7a78202800985a93484fb3b4ef22bd2dc13697efebc40a4198af54a0->leave($__internal_4d9047be7a78202800985a93484fb3b4ef22bd2dc13697efebc40a4198af54a0_prof);

        
        $__internal_8d51f25529350afc237e98b746a69ad34cccc8d324086b14b6994409b7fb5e01->leave($__internal_8d51f25529350afc237e98b746a69ad34cccc8d324086b14b6994409b7fb5e01_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import 'SyliusUiBundle:Macro:headers.html.twig' as headers %}

{{ headers.default(customer.fullname, configuration.vars.icon|default('cart'), configuration.vars.subheader|default('sylius.ui.process_your_orders')|trans) }}
", "SyliusAdminBundle:Customer/Order/Index:_customerHeader.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Order/Index/_customerHeader.html.twig");
    }
}
