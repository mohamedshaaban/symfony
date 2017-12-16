<?php

/* SyliusShopBundle:Order:_summary.html.twig */
class __TwigTemplate_6f1260b40e49b392e5bf86fe989b46b492528c4229d5bc8230fee750183b0c8d extends Twig_Template
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
        $__internal_6bc79e3bd52fe10ebff4fba304b39f3484a2fba01e41e9ed641385356cd0dce3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bc79e3bd52fe10ebff4fba304b39f3484a2fba01e41e9ed641385356cd0dce3->enter($__internal_6bc79e3bd52fe10ebff4fba304b39f3484a2fba01e41e9ed641385356cd0dce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:_summary.html.twig"));

        $__internal_926f8bda44d297440af68e501ad7e07cb0f3f167da74092f92a6ba7de9884a62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_926f8bda44d297440af68e501ad7e07cb0f3f167da74092f92a6ba7de9884a62->enter($__internal_926f8bda44d297440af68e501ad7e07cb0f3f167da74092f92a6ba7de9884a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Order:_summary.html.twig"));

        // line 1
        $context["money"] = $this->loadTemplate("@SyliusShop/Common/Macro/money.html.twig", "SyliusShopBundle:Order:_summary.html.twig", 1);
        // line 2
        echo "
<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        ";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.summary_of_your_order"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 6, $this->getSourceContext()); })()), "number", array()), "html", null, true);
        echo "
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    ";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 10, $this->getSourceContext()); })()), "checkoutCompletedAt", array())), "html", null, true);
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 13
        echo $context["money"]->macro_convertAndFormat(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 13, $this->getSourceContext()); })()), "total", array()));
        echo "
                </div>
                <div class=\"item\">
                    ";
        // line 16
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 16, $this->getSourceContext()); })()), "items", array())), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.items")), "html", null, true);
        echo "
                </div>
            </div>
        </div>
    </div>
</h1>
";
        
        $__internal_6bc79e3bd52fe10ebff4fba304b39f3484a2fba01e41e9ed641385356cd0dce3->leave($__internal_6bc79e3bd52fe10ebff4fba304b39f3484a2fba01e41e9ed641385356cd0dce3_prof);

        
        $__internal_926f8bda44d297440af68e501ad7e07cb0f3f167da74092f92a6ba7de9884a62->leave($__internal_926f8bda44d297440af68e501ad7e07cb0f3f167da74092f92a6ba7de9884a62_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Order:_summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 13,  42 => 10,  33 => 6,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import \"@SyliusShop/Common/Macro/money.html.twig\" as money %}

<h1 class=\"ui header\">
    <i class=\"circular cart icon\"></i>
    <div class=\"content\">
        {{ 'sylius.ui.summary_of_your_order'|trans }} #{{ order.number }}
        <div class=\"sub header\">
            <div class=\"ui horizontal divided list\">
                <div class=\"item\">
                    {{ order.checkoutCompletedAt|date }}
                </div>
                <div class=\"item\">
                    {{ money.convertAndFormat(order.total) }}
                </div>
                <div class=\"item\">
                    {{ order.items|length }} {{ 'sylius.ui.items'|trans|lower }}
                </div>
            </div>
        </div>
    </div>
</h1>
", "SyliusShopBundle:Order:_summary.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Order/_summary.html.twig");
    }
}
