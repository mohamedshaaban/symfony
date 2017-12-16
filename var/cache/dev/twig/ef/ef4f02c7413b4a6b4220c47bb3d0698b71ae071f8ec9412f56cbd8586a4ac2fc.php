<?php

/* SyliusShopBundle:Checkout/SelectPayment:_form.html.twig */
class __TwigTemplate_1fc7eef8c705a681ca231d1b911b22dfada41cc31fb9bcebb690c11a18de30a4 extends Twig_Template
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
        $__internal_1204e72469bc2a325548cdc0daf7f4507235b33d1f569562f15799ca33be85e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1204e72469bc2a325548cdc0daf7f4507235b33d1f569562f15799ca33be85e0->enter($__internal_1204e72469bc2a325548cdc0daf7f4507235b33d1f569562f15799ca33be85e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig"));

        $__internal_721920950ac6f48a17638c17740c12c67bfc8504e0394533ad4b887e1ea2869a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721920950ac6f48a17638c17740c12c67bfc8504e0394533ad4b887e1ea2869a->enter($__internal_721920950ac6f48a17638c17740c12c67bfc8504e0394533ad4b887e1ea2869a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig"));

        // line 1
        echo "<div class=\"ui unmargined segments\">
    ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 2, $this->getSourceContext()); })()), "payments", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["payment_form"]) {
            // line 3
            echo "        ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_payment.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", 3)->display(array_merge($context, array("form" => $context["payment_form"])));
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
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", 5)->display($context);
            // line 6
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['payment_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</div>
";
        
        $__internal_1204e72469bc2a325548cdc0daf7f4507235b33d1f569562f15799ca33be85e0->leave($__internal_1204e72469bc2a325548cdc0daf7f4507235b33d1f569562f15799ca33be85e0_prof);

        
        $__internal_721920950ac6f48a17638c17740c12c67bfc8504e0394533ad4b887e1ea2869a->leave($__internal_721920950ac6f48a17638c17740c12c67bfc8504e0394533ad4b887e1ea2869a_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig";
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
    {% for payment_form in form.payments %}
        {% include '@SyliusShop/Checkout/SelectPayment/_payment.html.twig' with {'form': payment_form} %}
    {% else %}
        {% include '@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig' %}
    {% endfor %}
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_form.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectPayment/_form.html.twig");
    }
}
