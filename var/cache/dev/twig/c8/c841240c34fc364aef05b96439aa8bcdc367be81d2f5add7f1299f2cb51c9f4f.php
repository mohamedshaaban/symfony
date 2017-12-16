<?php

/* SyliusAdminBundle:Customer:_info.html.twig */
class __TwigTemplate_26f00c09789c9c281417363a7076beca73ccaefc2f4e88ede67e8c6b53e9df85 extends Twig_Template
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
        $__internal_5c5bcde556af75b6e5691f0f887e95497bf9321f14a98d0700b953f09c0dd7d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c5bcde556af75b6e5691f0f887e95497bf9321f14a98d0700b953f09c0dd7d7->enter($__internal_5c5bcde556af75b6e5691f0f887e95497bf9321f14a98d0700b953f09c0dd7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_info.html.twig"));

        $__internal_1d35032e18f7b97b3e56dfa56c7051abc8e5a8d46cbe1c7135b1e3e2c1c4418b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d35032e18f7b97b3e56dfa56c7051abc8e5a8d46cbe1c7135b1e3e2c1c4418b->enter($__internal_1d35032e18f7b97b3e56dfa56c7051abc8e5a8d46cbe1c7135b1e3e2c1c4418b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Customer:_info.html.twig"));

        // line 1
        echo "<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_admin_customer_show", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->getSourceContext()); })()), "id", array()))), "html", null, true);
        echo "\" class=\"header sylius-customer-name\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 3, $this->getSourceContext()); })()), "fullName", array()), "html", null, true);
        echo "</a>
        <div class=\"meta\">
            <span class=\"date\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.customer_since"), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDate(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 5, $this->getSourceContext()); })()), "createdAt", array()));
        echo ".</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 9, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "\">
            <i class=\"envelope icon\"></i>
            ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 11, $this->getSourceContext()); })()), "email", array()), "html", null, true);
        echo "
        </a>
    </div>
    ";
        // line 14
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 14, $this->getSourceContext()); })()), "phoneNumber", array()))) {
            // line 15
            echo "        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            ";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["customer"]) || array_key_exists("customer", $context) ? $context["customer"] : (function () { throw new Twig_Error_Runtime('Variable "customer" does not exist.', 18, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 22
        echo "    ";
        if ((twig_get_attribute($this->env, $this->getSourceContext(), ($context["order"] ?? null), "customerIp", array(), "any", true, true) &&  !twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 22, $this->getSourceContext()); })()), "customerIp", array())))) {
            // line 23
            echo "        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            ";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 26, $this->getSourceContext()); })()), "customerIp", array()), "html", null, true);
            echo "
        </span>
        </div>
    ";
        }
        // line 30
        echo "</div>
";
        
        $__internal_5c5bcde556af75b6e5691f0f887e95497bf9321f14a98d0700b953f09c0dd7d7->leave($__internal_5c5bcde556af75b6e5691f0f887e95497bf9321f14a98d0700b953f09c0dd7d7_prof);

        
        $__internal_1d35032e18f7b97b3e56dfa56c7051abc8e5a8d46cbe1c7135b1e3e2c1c4418b->leave($__internal_1d35032e18f7b97b3e56dfa56c7051abc8e5a8d46cbe1c7135b1e3e2c1c4418b_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Customer:_info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  78 => 26,  73 => 23,  70 => 22,  63 => 18,  58 => 15,  56 => 14,  50 => 11,  45 => 9,  36 => 5,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui fluid card\" id=\"customer\">
    <div class=\"content\">
        <a href=\"{{ path('sylius_admin_customer_show', {'id': customer.id}) }}\" class=\"header sylius-customer-name\">{{ customer.fullName }}</a>
        <div class=\"meta\">
            <span class=\"date\">{{ 'sylius.ui.customer_since'|trans }} {{ customer.createdAt|format_date }}.</span>
        </div>
    </div>
    <div class=\"extra content\">
        <a href=\"mailto:{{ customer.email }}\">
            <i class=\"envelope icon\"></i>
            {{ customer.email }}
        </a>
    </div>
    {% if customer.phoneNumber is not empty %}
        <div class=\"extra content\">
        <span>
            <i class=\"phone icon\"></i>
            {{ customer.phoneNumber }}
        </span>
        </div>
    {% endif %}
    {% if order.customerIp is defined and order.customerIp is not empty %}
        <div class=\"extra content\" id=\"ipAddress\">
        <span>
            <i class=\"desktop icon\"></i>
            {{ order.customerIp }}
        </span>
        </div>
    {% endif %}
</div>
", "SyliusAdminBundle:Customer:_info.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Customer/_info.html.twig");
    }
}
