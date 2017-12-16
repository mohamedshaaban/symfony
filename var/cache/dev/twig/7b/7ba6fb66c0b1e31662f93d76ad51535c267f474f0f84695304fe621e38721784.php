<?php

/* SyliusShopBundle:Checkout/SelectShipping:_form.html.twig */
class __TwigTemplate_42fca0a41f010bb33ab4d327cbf42af38a105ba1ed3acf039c84fd85e3855d33 extends Twig_Template
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
        $__internal_6afe3218b0d7a05e1a0286302c394f04c60117d4a85500a52eac4dcefb5ddee5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6afe3218b0d7a05e1a0286302c394f04c60117d4a85500a52eac4dcefb5ddee5->enter($__internal_6afe3218b0d7a05e1a0286302c394f04c60117d4a85500a52eac4dcefb5ddee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig"));

        $__internal_49ec8e26a1f6f74262fd6acff3c04848833826ee2dc62be32ed3e53115a61054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ec8e26a1f6f74262fd6acff3c04848833826ee2dc62be32ed3e53115a61054->enter($__internal_49ec8e26a1f6f74262fd6acff3c04848833826ee2dc62be32ed3e53115a61054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig"));

        // line 1
        echo "<div class=\"ui unmargined segments\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 2, $this->getSourceContext()); })()), "shipments", array()));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["shipment"]) {
            // line 3
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_shipment.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", 3)->display(array_merge($context, array("form" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 3, $this->getSourceContext()); })()), "shipments", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"))));
            // line 4
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 5
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_6afe3218b0d7a05e1a0286302c394f04c60117d4a85500a52eac4dcefb5ddee5->leave($__internal_6afe3218b0d7a05e1a0286302c394f04c60117d4a85500a52eac4dcefb5ddee5_prof);

        
        $__internal_49ec8e26a1f6f74262fd6acff3c04848833826ee2dc62be32ed3e53115a61054->leave($__internal_49ec8e26a1f6f74262fd6acff3c04848833826ee2dc62be32ed3e53115a61054_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 7,  65 => 6,  62 => 5,  49 => 4,  46 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui unmargined segments\">
    {% for shipment in order.shipments %}
        {% include '@SyliusShop/Checkout/SelectShipping/_shipment.html.twig' with {'form': form.shipments[loop.index0]} %}
    {% else %}
        {% include '@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig' %}
    {% endfor %}
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectShipping/_form.html.twig");
    }
}
