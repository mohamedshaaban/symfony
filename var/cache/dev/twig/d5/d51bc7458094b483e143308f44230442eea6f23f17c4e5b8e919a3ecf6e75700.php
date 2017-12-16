<?php

/* SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig */
class __TwigTemplate_c149cf62aa9a284b59ac71510684146469099b39a53dc6999759f5ce94b93bec extends Twig_Template
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
        $__internal_a9a252f0390c6e91be3b41c0521b051b270cc3b879d2dff5282bef423cd2fab6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9a252f0390c6e91be3b41c0521b051b270cc3b879d2dff5282bef423cd2fab6->enter($__internal_a9a252f0390c6e91be3b41c0521b051b270cc3b879d2dff5282bef423cd2fab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig"));

        $__internal_0622105796ae24d8c8fb422950a4a188cd25c4c76867410577c165ceaabeca4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0622105796ae24d8c8fb422950a4a188cd25c4c76867410577c165ceaabeca4e->enter($__internal_0622105796ae24d8c8fb422950a4a188cd25c4c76867410577c165ceaabeca4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig"));

        // line 1
        echo "<div class=\"ui segment\">
    <div class=\"ui dividing header\">";
        // line 2
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("sylius.ui.shipment"), "html", null, true);
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
            $context["fee"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->getSourceContext()); })()), "method", array()), "vars", array()), "shipping_costs", array()), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), $context["choice_form"], "vars", array()), "value", array()), array(), "array");
            // line 8
            echo "            ";
            $context["method"] = twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->getSourceContext()); })()), "method", array()), "vars", array()), "choices", array()), twig_get_attribute($this->env, $this->getSourceContext(), $context["loop"], "index0", array()), array(), "array"), "data", array());
            // line 9
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_choice.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", 9)->display(array_merge($context, array("form" => $context["choice_form"], "method" => (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 9, $this->getSourceContext()); })()), "fee" => (isset($context["fee"]) || array_key_exists("fee", $context) ? $context["fee"] : (function () { throw new Twig_Error_Runtime('Variable "fee" does not exist.', 9, $this->getSourceContext()); })()))));
            // line 10
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
            // line 11
            echo "            ";
            $this->loadTemplate("@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", 11)->display($context);
            // line 12
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['choice_form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    </div>
</div>
";
        
        $__internal_a9a252f0390c6e91be3b41c0521b051b270cc3b879d2dff5282bef423cd2fab6->leave($__internal_a9a252f0390c6e91be3b41c0521b051b270cc3b879d2dff5282bef423cd2fab6_prof);

        
        $__internal_0622105796ae24d8c8fb422950a4a188cd25c4c76867410577c165ceaabeca4e->leave($__internal_0622105796ae24d8c8fb422950a4a188cd25c4c76867410577c165ceaabeca4e_prof);

    }

    public function getTemplateName()
    {
        return "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 13,  83 => 12,  80 => 11,  67 => 10,  64 => 9,  61 => 8,  58 => 7,  40 => 6,  35 => 4,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"ui segment\">
    <div class=\"ui dividing header\">{{ 'sylius.ui.shipment'|trans }} #{{ loop.index }}</div>
    <div class=\"ui fluid stackable items\">
        {{ form_errors(form.method) }}

        {% for choice_form in form.method %}
            {% set fee = form.method.vars.shipping_costs[choice_form.vars.value] %}
            {% set method = form.method.vars.choices[loop.index0].data %}
            {% include '@SyliusShop/Checkout/SelectShipping/_choice.html.twig' with {'form': choice_form, 'method': method, 'fee': fee} %}
        {% else %}
            {% include '@SyliusShop/Checkout/SelectShipping/_unavailable.html.twig' %}
        {% endfor %}
    </div>
</div>
", "SyliusShopBundle:Checkout/SelectShipping:_shipment.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle/Resources/views/Checkout/SelectShipping/_shipment.html.twig");
    }
}
