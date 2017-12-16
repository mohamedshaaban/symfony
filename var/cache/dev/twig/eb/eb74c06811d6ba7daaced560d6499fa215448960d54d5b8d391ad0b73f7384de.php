<?php

/* SyliusAdminBundle:Order/History:_address.html.twig */
class __TwigTemplate_23297a04f99fbea2873891d7a1956bf100efc380c3f61efcf2ec05bfaab3cc26 extends Twig_Template
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
        $__internal_11f0e890ab29a11ae4d324b9aaea97bb97e0b4de1fcd8f71c52692905c123b53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11f0e890ab29a11ae4d324b9aaea97bb97e0b4de1fcd8f71c52692905c123b53->enter($__internal_11f0e890ab29a11ae4d324b9aaea97bb97e0b4de1fcd8f71c52692905c123b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_address.html.twig"));

        $__internal_f7d97627c9a064086ed4e00656e06e658746692da4e85efe7aac129fff1ac256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d97627c9a064086ed4e00656e06e658746692da4e85efe7aac129fff1ac256->enter($__internal_f7d97627c9a064086ed4e00656e06e658746692da4e85efe7aac129fff1ac256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/History:_address.html.twig"));

        // line 1
        echo "<div class=\"column\">
    <h4 class=\"ui top attached styled header\">
        ";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((("sylius.ui." . (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 3, $this->getSourceContext()); })())) . "_address")), "html", null, true);
        echo "
    </h4>
    <div class=\"ui attached segment\" id=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 5, $this->getSourceContext()); })()), "html", null, true);
        echo "-address-changes\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_address_log_entry_index", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 6, $this->getSourceContext()); })()), "id", array()))));
        echo "
    </div>
</div>
";
        
        $__internal_11f0e890ab29a11ae4d324b9aaea97bb97e0b4de1fcd8f71c52692905c123b53->leave($__internal_11f0e890ab29a11ae4d324b9aaea97bb97e0b4de1fcd8f71c52692905c123b53_prof);

        
        $__internal_f7d97627c9a064086ed4e00656e06e658746692da4e85efe7aac129fff1ac256->leave($__internal_f7d97627c9a064086ed4e00656e06e658746692da4e85efe7aac129fff1ac256_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/History:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"column\">
    <h4 class=\"ui top attached styled header\">
        {{ ('sylius.ui.'~type~'_address')|trans }}
    </h4>
    <div class=\"ui attached segment\" id=\"{{ type }}-address-changes\">
        {{ render(url('sylius_admin_partial_address_log_entry_index', {'id': address.id})) }}
    </div>
</div>
", "SyliusAdminBundle:Order/History:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/History/_address.html.twig");
    }
}
