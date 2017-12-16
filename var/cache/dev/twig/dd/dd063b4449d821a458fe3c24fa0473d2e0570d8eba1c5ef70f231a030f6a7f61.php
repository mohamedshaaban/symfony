<?php

/* SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig */
class __TwigTemplate_c3f89e2bdb49d729298ddd131420f6b5418b3bd4c132a38cdfbd49b0efd128ab extends Twig_Template
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
        $__internal_cb5e84f8a0dbf61bcd66b1404513ed4c389186a1f73c81f39f51386a4fbb127e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb5e84f8a0dbf61bcd66b1404513ed4c389186a1f73c81f39f51386a4fbb127e->enter($__internal_cb5e84f8a0dbf61bcd66b1404513ed4c389186a1f73c81f39f51386a4fbb127e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig"));

        $__internal_b977a9289d79ed08709a71309cd32f2451a52e782baee46b70ddce95814fb1ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b977a9289d79ed08709a71309cd32f2451a52e782baee46b70ddce95814fb1ce->enter($__internal_b977a9289d79ed08709a71309cd32f2451a52e782baee46b70ddce95814fb1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig"));

        // line 1
        echo "<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), 'label');
        echo "</a>
        ";
        // line 9
        if ( !(null === twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 9, $this->getSourceContext()); })()), "description", array()))) {
            // line 10
            echo "            <div class=\"description\">
                <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 11, $this->getSourceContext()); })()), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        // line 14
        echo "    </div>
</div>
";
        
        $__internal_cb5e84f8a0dbf61bcd66b1404513ed4c389186a1f73c81f39f51386a4fbb127e->leave($__internal_cb5e84f8a0dbf61bcd66b1404513ed4c389186a1f73c81f39f51386a4fbb127e_prof);

        
        $__internal_b977a9289d79ed08709a71309cd32f2451a52e782baee46b70ddce95814fb1ce->leave($__internal_b977a9289d79ed08709a71309cd32f2451a52e782baee46b70ddce95814fb1ce_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  46 => 11,  43 => 10,  41 => 9,  37 => 8,  30 => 4,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"item\">
    <div class=\"field\">
        <div class=\"ui radio checkbox\">
            {{ form_widget(form) }}
        </div>
    </div>
    <div class=\"content\">
        <a class=\"header\">{{ form_label(form) }}</a>
        {% if method.description is not null %}
            <div class=\"description\">
                <p>{{ method.description }}</p>
            </div>
        {% endif %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_choice.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectPayment/_choice.html.twig");
    }
}
