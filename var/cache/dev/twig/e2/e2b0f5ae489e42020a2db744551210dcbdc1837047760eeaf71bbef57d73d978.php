<?php

/* SyliusShopBundle:Product:_horizontalList.html.twig */
class __TwigTemplate_9772a1ac7d1391d58a7db0111e0a3f6078b3800053d957604d6cec3c5b6b33af extends Twig_Template
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
        $__internal_cc60cc59ac85be7b045c9ca6f669e9d39356d4dfce03211cb7750179d34acb64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc60cc59ac85be7b045c9ca6f669e9d39356d4dfce03211cb7750179d34acb64->enter($__internal_cc60cc59ac85be7b045c9ca6f669e9d39356d4dfce03211cb7750179d34acb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_horizontalList.html.twig"));

        $__internal_37b37e1d5941e900a25f9718d0fd29c9135ba947291c1c2f53dba750d2c5aec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37b37e1d5941e900a25f9718d0fd29c9135ba947291c1c2f53dba750d2c5aec5->enter($__internal_37b37e1d5941e900a25f9718d0fd29c9135ba947291c1c2f53dba750d2c5aec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Product:_horizontalList.html.twig"));

        // line 1
        echo "<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new Twig_Error_Runtime('Variable "products" does not exist.', 3, $this->getSourceContext()); })()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 4
            echo "            <div class=\"column\">
                ";
            // line 5
            $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "SyliusShopBundle:Product:_horizontalList.html.twig", 5)->display($context);
            // line 6
            echo "            </div>
    ";
            // line 7
            if ((0 == (twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index", array()) % 4))) {
                // line 8
                echo "    </div>
    <div class=\"row\">
    ";
            }
            // line 11
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </div>
</div>
";
        
        $__internal_cc60cc59ac85be7b045c9ca6f669e9d39356d4dfce03211cb7750179d34acb64->leave($__internal_cc60cc59ac85be7b045c9ca6f669e9d39356d4dfce03211cb7750179d34acb64_prof);

        
        $__internal_37b37e1d5941e900a25f9718d0fd29c9135ba947291c1c2f53dba750d2c5aec5->leave($__internal_37b37e1d5941e900a25f9718d0fd29c9135ba947291c1c2f53dba750d2c5aec5_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Product:_horizontalList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  61 => 11,  56 => 8,  54 => 7,  51 => 6,  49 => 5,  46 => 4,  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui four column stackable grid\">
    <div class=\"row\">
        {% for product in products %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
    {% if 0 == loop.index % 4 %}
    </div>
    <div class=\"row\">
    {% endif %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Product:_horizontalList.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Product/_horizontalList.html.twig");
    }
}
