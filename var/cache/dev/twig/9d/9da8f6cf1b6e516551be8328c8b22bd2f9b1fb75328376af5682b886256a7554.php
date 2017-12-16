<?php

/* SyliusShopBundle:Common:_address.html.twig */
class __TwigTemplate_194f378a88b64a140bf6b32e2b9636f425915cdd9586855a5b57a8964c0cee0a extends Twig_Template
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
        $__internal_af052bc9f972e6d2a947cfb4ef4dcb514f3855913c48f08d40742c7363e11e02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af052bc9f972e6d2a947cfb4ef4dcb514f3855913c48f08d40742c7363e11e02->enter($__internal_af052bc9f972e6d2a947cfb4ef4dcb514f3855913c48f08d40742c7363e11e02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        $__internal_593ec1532a7eec7daf0667bfea1847b6da81326f18e8a7190e7420dcf2477bdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_593ec1532a7eec7daf0667bfea1847b6da81326f18e8a7190e7420dcf2477bdb->enter($__internal_593ec1532a7eec7daf0667bfea1847b6da81326f18e8a7190e7420dcf2477bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common:_address.html.twig"));

        // line 1
        echo "<address>
    ";
        // line 2
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 2, $this->getSourceContext()); })()), "company", array()))) {
            // line 3
            echo "        <strong>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 3, $this->getSourceContext()); })()), "company", array()), "html", null, true);
            echo "</strong><br>
    ";
        }
        // line 5
        echo "    <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 5, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 5, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</strong><br>
    ";
        // line 6
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 6, $this->getSourceContext()); })()), "phoneNumber", array()))) {
            // line 7
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 9
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 9, $this->getSourceContext()); })()), "street", array()), "html", null, true);
        echo "<br/>
    ";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 10, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 10, $this->getSourceContext()); })()), "postcode", array()), "html", null, true);
        echo "<br/>
    ";
        // line 11
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 11, $this->getSourceContext()); })()))))) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()))), "html", null, true);
            echo "<br/>
    ";
        }
        // line 14
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 14, $this->getSourceContext()); })()), "countryCode", array())), "html", null, true);
        echo " flag\"></i>
    ";
        // line 15
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 15, $this->getSourceContext()); })()), "countryCode", array()))), "html", null, true);
        echo "
</address>
";
        
        $__internal_af052bc9f972e6d2a947cfb4ef4dcb514f3855913c48f08d40742c7363e11e02->leave($__internal_af052bc9f972e6d2a947cfb4ef4dcb514f3855913c48f08d40742c7363e11e02_prof);

        
        $__internal_593ec1532a7eec7daf0667bfea1847b6da81326f18e8a7190e7420dcf2477bdb->leave($__internal_593ec1532a7eec7daf0667bfea1847b6da81326f18e8a7190e7420dcf2477bdb_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 15,  70 => 14,  64 => 12,  62 => 11,  56 => 10,  51 => 9,  45 => 7,  43 => 6,  36 => 5,  30 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<address>
    {% if address.company is not null %}
        <strong>{{ address.company }}</strong><br>
    {% endif %}
    <strong>{{ address.firstName }} {{ address.lastName }}</strong><br>
    {% if address.phoneNumber is not null %}
        {{ address.phoneNumber }}<br/>
    {% endif %}
    {{ address.street }}<br/>
    {{ address.city }}, {{ address.postcode }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }}
</address>
", "SyliusShopBundle:Common:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/_address.html.twig");
    }
}
