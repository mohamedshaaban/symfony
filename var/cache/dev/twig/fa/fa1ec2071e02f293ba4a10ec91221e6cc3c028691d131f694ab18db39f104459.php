<?php

/* SyliusAdminBundle:Order/Show:_header.html.twig */
class __TwigTemplate_e30f35428ac1dfb9b0c8e2f908ecb19b62d31731e9e224811c71e7cff2cdfbbd extends Twig_Template
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
        $__internal_d4c2d67279d4cc4e34dce8f197325311dc7fc38bec0d614974e32895836a4b12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4c2d67279d4cc4e34dce8f197325311dc7fc38bec0d614974e32895836a4b12->enter($__internal_d4c2d67279d4cc4e34dce8f197325311dc7fc38bec0d614974e32895836a4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_header.html.twig"));

        $__internal_a934266e6eeb106538c1dc3b62f1fccfa5b43392baf69e020d51efe6633375f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a934266e6eeb106538c1dc3b62f1fccfa5b43392baf69e020d51efe6633375f8->enter($__internal_a934266e6eeb106538c1dc3b62f1fccfa5b43392baf69e020d51efe6633375f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusAdminBundle:Order/Show:_header.html.twig"));

        // line 1
        $context["flags"] = $this->loadTemplate("@SyliusUi/Macro/flags.html.twig", "SyliusAdminBundle:Order/Show:_header.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 10
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\DateTimeExtension')->formatDatetime(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()), "checkoutCompletedAt", array()));
        echo "
                </div>
                <div class=\"item\" id=\"sylius-order-state\">
                    ";
        // line 13
        $this->loadTemplate(array(0 => ((("@SyliusAdmin/Order/Label/State" . "/") . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "state", array())) . ".html.twig"), 1 => "@SyliusUi/Label/_default.html.twig"), "SyliusAdminBundle:Order/Show:_header.html.twig", 13)->display(array_merge($context, array("value" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("sylius.ui." . twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "state", array()))))));
        // line 14
        echo "                </div>
                <div class=\"item\" id=\"sylius-order-currency\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->getSourceContext()); })()), "currencyCode", array()), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 19
        echo $context["flags"]->macro_fromLocaleCode(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->getSourceContext()); })()), "localeCode", array()));
        echo $this->env->getExtension('Sonata\IntlBundle\Twig\Extension\LocaleExtension')->locale(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 19, $this->getSourceContext()); })()), "localeCode", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.purchased_from"), "html", null, true);
        echo "
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: ";
        // line 23
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 23, $this->getSourceContext()); })()), "channel", array()), "color", array()), "html", null, true);
        echo "\"></span> <strong>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 23, $this->getSourceContext()); })()), "channel", array()), "html", null, true);
        echo "</strong>
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_d4c2d67279d4cc4e34dce8f197325311dc7fc38bec0d614974e32895836a4b12->leave($__internal_d4c2d67279d4cc4e34dce8f197325311dc7fc38bec0d614974e32895836a4b12_prof);

        
        $__internal_a934266e6eeb106538c1dc3b62f1fccfa5b43392baf69e020d51efe6633375f8->leave($__internal_a934266e6eeb106538c1dc3b62f1fccfa5b43392baf69e020d51efe6633375f8_prof);

    }

    public function getTemplateName()
    {
        return "SyliusAdminBundle:Order/Show:_header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  67 => 22,  60 => 19,  54 => 16,  50 => 14,  48 => 13,  42 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/flags.html.twig' as flags %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|format_datetime }}
                </div>
                <div class=\"item\" id=\"sylius-order-state\">
                    {% include [('@SyliusAdmin/Order/Label/State' ~ '/' ~ order.state ~ '.html.twig'), '@SyliusUi/Label/_default.html.twig'] with {'value': ('sylius.ui.' ~ order.state)|trans} %}
                </div>
                <div class=\"item\" id=\"sylius-order-currency\">
                    {{ order.currencyCode }}
                </div>
                <div class=\"item\">
                    {{ flags.fromLocaleCode(order.localeCode) }}{{ order.localeCode|locale }}
                </div>
                <div class=\"item\">
                    {{ 'sylius.ui.purchased_from'|trans }}
                    <span class=\"ui large empty horizontal circular label\" style=\"background-color: {{ order.channel.color }}\"></span> <strong>{{ order.channel }}</strong>
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusAdminBundle:Order/Show:_header.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle/Resources/views/Order/Show/_header.html.twig");
    }
}
