<?php

/* SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig */
class __TwigTemplate_e75869b3b07e60d6730c84d79afae9932ea4b672f54da1ba66a0cc3e13452e27 extends Twig_Template
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
        $__internal_f213575d42664363f55dc94bc142e6c34a64a569982c6e35dbcabd7db2ec9bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f213575d42664363f55dc94bc142e6c34a64a569982c6e35dbcabd7db2ec9bbd->enter($__internal_f213575d42664363f55dc94bc142e6c34a64a569982c6e35dbcabd7db2ec9bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig"));

        $__internal_7101e4accb7c46b06c87b5e5b8972190d900e84468008ff8db9534e740520bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7101e4accb7c46b06c87b5e5b8972190d900e84468008ff8db9534e740520bca->enter($__internal_7101e4accb7c46b06c87b5e5b8972190d900e84468008ff8db9534e740520bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig"));

        // line 1
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("sylius_admin_partial_customer_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(),         // line 2
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 2, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method"), "template" => "@SyliusAdmin/Customer/Order/Index/_customerHeader.html.twig", "vars" => twig_get_attribute($this->env, $this->getSourceContext(),         // line 4
(isset($context["configuration"]) || array_key_exists("configuration", $context) ? $context["configuration"] : (function () { throw new Twig_Error_Runtime('Variable "configuration" does not exist.', 4, $this->getSourceContext()); })()), "vars", array()))));
        // line 5
        echo "
";
        
        $__internal_f213575d42664363f55dc94bc142e6c34a64a569982c6e35dbcabd7db2ec9bbd->leave($__internal_f213575d42664363f55dc94bc142e6c34a64a569982c6e35dbcabd7db2ec9bbd_prof);

        
        $__internal_7101e4accb7c46b06c87b5e5b8972190d900e84468008ff8db9534e740520bca->leave($__internal_7101e4accb7c46b06c87b5e5b8972190d900e84468008ff8db9534e740520bca_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 5,  27 => 4,  26 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ render(url('sylius_admin_partial_customer_show', {
    'id': app.request.attributes.get('id'),
    'template': '@SyliusAdmin/Customer/Order/Index/_customerHeader.html.twig',
    'vars': configuration.vars
})) }}
", "SyliusAdminBundle:Customer/Order/Index:_headerTitle.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/Order/Index/_headerTitle.html.twig");
    }
}
