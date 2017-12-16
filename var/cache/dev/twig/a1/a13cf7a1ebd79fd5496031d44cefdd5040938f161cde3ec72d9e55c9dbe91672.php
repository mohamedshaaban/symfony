<?php

/* SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig */
class __TwigTemplate_6ece190962b073f6f18d7485642de37af3f8a5acbd46ee3d46756595a0e9b1d7 extends Twig_Template
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
        $__internal_2c44c5837432eb17153437d24dbbb6c6dd9797698736844a94f21c7d83467267 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c44c5837432eb17153437d24dbbb6c6dd9797698736844a94f21c7d83467267->enter($__internal_2c44c5837432eb17153437d24dbbb6c6dd9797698736844a94f21c7d83467267_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig"));

        $__internal_526f3a4dfc679a921defa69f318e5520c0aed9289cfaa12b86e485ec642e03d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_526f3a4dfc679a921defa69f318e5520c0aed9289cfaa12b86e485ec642e03d2->enter($__internal_526f3a4dfc679a921defa69f318e5520c0aed9289cfaa12b86e485ec642e03d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig"));

        // line 1
        $context["id"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 1, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "id"), "method");
        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("sylius_shop_account_address_book_set_as_default", array("id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 3, $this->getSourceContext()); })()))), "method" => "PATCH"));
        echo "
    <input hidden name=\"";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "defaultAddress", array()), "vars", array()), "full_name", array(), "array"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 4, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
    <button type=\"submit\" class=\"ui labeled icon teal button\">
        <i class=\"save icon\"></i>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.set_as_default"), "html", null, true);
        echo "
    </button>
";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "_token", array()), 'row');
        echo "
";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'form_end', array("render_rest" => false));
        echo "
";
        
        $__internal_2c44c5837432eb17153437d24dbbb6c6dd9797698736844a94f21c7d83467267->leave($__internal_2c44c5837432eb17153437d24dbbb6c6dd9797698736844a94f21c7d83467267_prof);

        
        $__internal_526f3a4dfc679a921defa69f318e5520c0aed9289cfaa12b86e485ec642e03d2->leave($__internal_526f3a4dfc679a921defa69f318e5520c0aed9289cfaa12b86e485ec642e03d2_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 9,  46 => 8,  41 => 6,  34 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set id = app.request.attributes.get('id') %}

{{ form_start(form, {'action': path('sylius_shop_account_address_book_set_as_default', {'id': id}), 'method': 'PATCH'}) }}
    <input hidden name=\"{{ form.defaultAddress.vars['full_name'] }}\" value=\"{{ id }}\" />
    <button type=\"submit\" class=\"ui labeled icon teal button\">
        <i class=\"save icon\"></i>{{ 'sylius.ui.set_as_default'|trans }}
    </button>
{{ form_row(form._token) }}
{{ form_end(form, {'render_rest': false}) }}
", "SyliusShopBundle:Account/AddressBook:_defaultAddressForm.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Account/AddressBook/_defaultAddressForm.html.twig");
    }
}
