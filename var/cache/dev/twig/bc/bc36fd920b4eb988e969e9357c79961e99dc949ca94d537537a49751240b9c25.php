<?php

/* SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig */
class __TwigTemplate_e0a500a3964cbbafff9e712a4bb63fde80507b3b10d96aaaa2f7f50e10e42793 extends Twig_Template
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
        $__internal_5061a4071f61be31eedf301bfcd982f91bf4adf596d7a170527ba099e4eafafe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5061a4071f61be31eedf301bfcd982f91bf4adf596d7a170527ba099e4eafafe->enter($__internal_5061a4071f61be31eedf301bfcd982f91bf4adf596d7a170527ba099e4eafafe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig"));

        $__internal_83d512fb6f4cf65585b1692163ff3eff4b46cd327b0776c180ccd4945d0ea2d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83d512fb6f4cf65585b1692163ff3eff4b46cd327b0776c180ccd4945d0ea2d0->enter($__internal_83d512fb6f4cf65585b1692163ff3eff4b46cd327b0776c180ccd4945d0ea2d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.payment"), "html", null, true);
        echo " #";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["loop"]) || array_key_exists("loop", $context) ? $context["loop"] : (function () { throw new Twig_Error_Runtime('Variable "loop" does not exist.', 2, $this->getSourceContext()); })()), "index", array()), "html", null, true);
        echo "</div>
    <div class=\"ui fluid stackable items\">
        ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), "method", array()), 'errors');
        echo "

        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), "method", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["choice_form"]) {
            // line 7
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_choice.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", 7)->display(array_merge($context, array("form" => $context["choice_form"], "method" => twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "method", array()), "vars", array()), "choices", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "data", array()))));
            // line 8
            echo "        ";
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
            // line 9
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", 9)->display($context);
            // line 10
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_5061a4071f61be31eedf301bfcd982f91bf4adf596d7a170527ba099e4eafafe->leave($__internal_5061a4071f61be31eedf301bfcd982f91bf4adf596d7a170527ba099e4eafafe_prof);

        
        $__internal_83d512fb6f4cf65585b1692163ff3eff4b46cd327b0776c180ccd4945d0ea2d0->leave($__internal_83d512fb6f4cf65585b1692163ff3eff4b46cd327b0776c180ccd4945d0ea2d0_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 11,  77 => 10,  74 => 9,  61 => 8,  58 => 7,  40 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui dividing header\">{{ 'sylius.ui.payment'|trans }} #{{ loop.index }}</div>
    <div class=\"ui fluid stackable items\">
        {{ form_errors(form.method) }}

        {% for choice_form in form.method %}
            {% include '@SyliusShop/Checkout/SelectPayment/_choice.html.twig' with {'form': choice_form, 'method': form.method.vars.choices[loop.index0].data} %}
        {% else %}
            {% include '@SyliusShop/Checkout/SelectPayment/_unavailable.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectPayment:_payment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectPayment/_payment.html.twig");
    }
}
