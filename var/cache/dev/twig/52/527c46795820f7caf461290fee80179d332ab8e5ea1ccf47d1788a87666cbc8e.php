<?php

/* SyliusAdminBundle:Common:_address.html.twig */
class __TwigTemplate_64c4fd942af0011cfb90dd5c571ff81fb288afea1ced369ff3632a895908eca3 extends Twig_Template
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
        $__internal_261450c3eb33205d075b84b54aaed1bf6bfd2fd095819c57be31205cef2abf8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_261450c3eb33205d075b84b54aaed1bf6bfd2fd095819c57be31205cef2abf8a->enter($__internal_261450c3eb33205d075b84b54aaed1bf6bfd2fd095819c57be31205cef2abf8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_address.html.twig"));

        $__internal_97e713801afbd409b91e3673910eabbf3f174ed824b5e9b63f8590ebf376cdf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e713801afbd409b91e3673910eabbf3f174ed824b5e9b63f8590ebf376cdf3->enter($__internal_97e713801afbd409b91e3673910eabbf3f174ed824b5e9b63f8590ebf376cdf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Common:_address.html.twig"));

        // line 1
        echo "<address>
    <strong>";
        // line 2
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 2, $this->getSourceContext()); })()), "firstName", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 2, $this->getSourceContext()); })()), "lastName", array()), "html", null, true);
        echo "</strong>
    ";
        // line 3
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 3, $this->getSourceContext()); })()), "company", array())) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 4, $this->getSourceContext()); })()), "company", array()), "html", null, true);
            echo "<br/>
    ";
        }
        // line 6
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 6, $this->getSourceContext()); })()), "phoneNumber", array()), "html", null, true);
        echo "<br/>
    ";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 7, $this->getSourceContext()); })()), "street", array()), "html", null, true);
        echo "<br/>
    ";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 8, $this->getSourceContext()); })()), "city", array()), "html", null, true);
        echo "<br/>
    ";
        // line 9
        if ( !twig_test_empty(call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 9, $this->getSourceContext()); })()))))) {
            // line 10
            echo "        ";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFilter('sylius_province_name')->getCallable(), array((isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 10, $this->getSourceContext()); })()))), "html", null, true);
            echo "<br/>
    ";
        }
        // line 12
        echo "    <i class=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 12, $this->getSourceContext()); })()), "countryCode", array())), "html", null, true);
        echo " flag\"></i>
    ";
        // line 13
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->env->getExtension('Sylius\Bundle\AddressingBundle\Twig\CountryNameExtension')->translateCountryIsoCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->getSourceContext()); })()), "countryCode", array()))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["address"]) || array_key_exists("address", $context) ? $context["address"] : (function () { throw new Twig_Error_Runtime('Variable "address" does not exist.', 13, $this->getSourceContext()); })()), "postcode", array()), "html", null, true);
        echo "
</address>
";
        
        $__internal_261450c3eb33205d075b84b54aaed1bf6bfd2fd095819c57be31205cef2abf8a->leave($__internal_261450c3eb33205d075b84b54aaed1bf6bfd2fd095819c57be31205cef2abf8a_prof);

        
        $__internal_97e713801afbd409b91e3673910eabbf3f174ed824b5e9b63f8590ebf376cdf3->leave($__internal_97e713801afbd409b91e3673910eabbf3f174ed824b5e9b63f8590ebf376cdf3_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Common:_address.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 13,  63 => 12,  57 => 10,  55 => 9,  51 => 8,  47 => 7,  42 => 6,  36 => 4,  34 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<address>
    <strong>{{ address.firstName }} {{ address.lastName }}</strong>
    {% if address.company %}
        {{ address.company }}<br/>
    {% endif %}
    {{ address.phoneNumber }}<br/>
    {{ address.street }}<br/>
    {{ address.city }}<br/>
    {% if address|sylius_province_name is not empty %}
        {{ address|sylius_province_name }}<br/>
    {% endif %}
    <i class=\"{{ address.countryCode|lower }} flag\"></i>
    {{ address.countryCode|sylius_country_name|upper }} {{ address.postcode }}
</address>
", "SyliusAdminBundle:Common:_address.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Common/_address.html.twig");
    }
}
