<?php

/* SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig */
class __TwigTemplate_f42e5ef11ff68ff326e70d561181de15e5f7cbb39855b029648d2b8b7443b611 extends Twig_Template
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
        $__internal_a299333cbc64f42f48bc0c72e20a5193b0511e2337689586f640fab21af4e6c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a299333cbc64f42f48bc0c72e20a5193b0511e2337689586f640fab21af4e6c2->enter($__internal_a299333cbc64f42f48bc0c72e20a5193b0511e2337689586f640fab21af4e6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig"));

        $__internal_7f868fad6da0d6ae6506daba3e7365e8b02ba5a8c3dd405c27de58bd6f08efe9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f868fad6da0d6ae6506daba3e7365e8b02ba5a8c3dd405c27de58bd6f08efe9->enter($__internal_7f868fad6da0d6ae6506daba3e7365e8b02ba5a8c3dd405c27de58bd6f08efe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["gatewayFactories"]) || array_key_exists("gatewayFactories", $context) ? $context["gatewayFactories"] : (function () { throw new Twig_Error_Runtime('Variable "gatewayFactories" does not exist.', 1, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["name"] => $context["gateway"]) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_payment_method_create", array("factory" => $context["name"])), "html", null, true);
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["name"], "html", null, true);
            echo "\" class=\"item\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["gateway"]), "html", null, true);
            echo "
    </a>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['gateway'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a299333cbc64f42f48bc0c72e20a5193b0511e2337689586f640fab21af4e6c2->leave($__internal_a299333cbc64f42f48bc0c72e20a5193b0511e2337689586f640fab21af4e6c2_prof);

        
        $__internal_7f868fad6da0d6ae6506daba3e7365e8b02ba5a8c3dd405c27de58bd6f08efe9->leave($__internal_7f868fad6da0d6ae6506daba3e7365e8b02ba5a8c3dd405c27de58bd6f08efe9_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 3,  29 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for name, gateway in gatewayFactories %}
    <a href=\"{{ path('sylius_admin_payment_method_create', { 'factory': name }) }}\" id=\"{{ name }}\" class=\"item\">
        {{ gateway|trans }}
    </a>
{% endfor %}
", "SyliusAdminBundle:PaymentMethod/Gateways:paymentGateways.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/PaymentMethod/Gateways/paymentGateways.html.twig");
    }
}
