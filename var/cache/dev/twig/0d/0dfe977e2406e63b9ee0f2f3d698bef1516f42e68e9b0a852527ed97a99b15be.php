<?php

/* SyliusShopBundle:Common/Order/Table:_items.html.twig */
class __TwigTemplate_c25e39e7c884657a533303237f20e9eff0b1cf0cff09c533e9dca0bff617f65f extends Twig_Template
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
        $__internal_fab55e4429109179cd4cc5b270950a033ff2c5b8066b30bdd732222c81bca346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fab55e4429109179cd4cc5b270950a033ff2c5b8066b30bdd732222c81bca346->enter($__internal_fab55e4429109179cd4cc5b270950a033ff2c5b8066b30bdd732222c81bca346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_items.html.twig"));

        $__internal_0a6e44214603e486b8c3180bb08eff7f624ac4be4f54ef9ff4ce2c58ed40e2bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a6e44214603e486b8c3180bb08eff7f624ac4be4f54ef9ff4ce2c58ed40e2bc->enter($__internal_0a6e44214603e486b8c3180bb08eff7f624ac4be4f54ef9ff4ce2c58ed40e2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Common/Order/Table:_items.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["order"]) || array_key_exists("order", $context) ? $context["order"] : (function () { throw new Twig_Error_Runtime('Variable "order" does not exist.', 1, $this->getSourceContext()); })()), "items", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 2
            echo "    ";
            $this->loadTemplate("@SyliusShop/Common/Order/Table/_item.html.twig", "SyliusShopBundle:Common/Order/Table:_items.html.twig", 2)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fab55e4429109179cd4cc5b270950a033ff2c5b8066b30bdd732222c81bca346->leave($__internal_fab55e4429109179cd4cc5b270950a033ff2c5b8066b30bdd732222c81bca346_prof);

        
        $__internal_0a6e44214603e486b8c3180bb08eff7f624ac4be4f54ef9ff4ce2c58ed40e2bc->leave($__internal_0a6e44214603e486b8c3180bb08eff7f624ac4be4f54ef9ff4ce2c58ed40e2bc_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Common/Order/Table:_items.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% for item in order.items %}
    {% include '@SyliusShop/Common/Order/Table/_item.html.twig' %}
{% endfor %}
", "SyliusShopBundle:Common/Order/Table:_items.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Common/Order/Table/_items.html.twig");
    }
}
