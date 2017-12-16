<?php

/* @SyliusShop/Product/Index/_main.html.twig */
class __TwigTemplate_a69b22544360f28d0760d9fb5113155101923af88cb4fe10f2f3bc797a12496e extends Twig_Template
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
        $__internal_c3666c7585025c7341670cd9ed1fd2cd3c5a86f58e1c324f4f5df1646d297936 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3666c7585025c7341670cd9ed1fd2cd3c5a86f58e1c324f4f5df1646d297936->enter($__internal_c3666c7585025c7341670cd9ed1fd2cd3c5a86f58e1c324f4f5df1646d297936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_main.html.twig"));

        $__internal_1b7518456f723b1ade394f9132eb9c7f9f53557d09abc6650a38c7846b519416 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b7518456f723b1ade394f9132eb9c7f9f53557d09abc6650a38c7846b519416->enter($__internal_1b7518456f723b1ade394f9132eb9c7f9f53557d09abc6650a38c7846b519416_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/Product/Index/_main.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 1);
        // line 2
        $context["pagination"] = $this->loadTemplate("@SyliusUi/Macro/pagination.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 2);
        // line 3
        echo "
";
        // line 4
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_search", array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 4, $this->getSourceContext()); })()), "data", array()))));
        echo "

";
        // line 6
        $this->loadTemplate("@SyliusShop/Product/Index/_search.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 6)->display($context);
        // line 7
        echo "
";
        // line 8
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.after_search", array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 8, $this->getSourceContext()); })()), "data", array()))));
        echo "

";
        // line 10
        $this->loadTemplate("@SyliusShop/Product/Index/_pagination.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 10)->display($context);
        // line 11
        $this->loadTemplate("@SyliusShop/Product/Index/_sorting.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 11)->display($context);
        // line 12
        echo "
<div class=\"ui clearing hidden divider\"></div>

";
        // line 15
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_list", array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 15, $this->getSourceContext()); })()), "data", array()))));
        echo "

";
        // line 17
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 17, $this->getSourceContext()); })()), "data", array())) > 0)) {
            // line 18
            echo "    <div class=\"ui three column stackable grid\" id=\"products\">
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 19, $this->getSourceContext()); })()), "data", array()));
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
                // line 20
                echo "            <div class=\"column\">
                ";
                // line 21
                $this->loadTemplate("@SyliusShop/Product/_box.html.twig", "@SyliusShop/Product/Index/_main.html.twig", 21)->display($context);
                // line 22
                echo "            </div>
        ";
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
            // line 24
            echo "    </div>
    <div class=\"ui hidden divider\"></div>

    ";
            // line 27
            echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sylius.shop.product.index.before_pagination", array("products" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 27, $this->getSourceContext()); })()), "data", array()))));
            echo "

    ";
            // line 29
            echo $context["pagination"]->macro_simple(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["resources"]) || array_key_exists("resources", $context) ? $context["resources"] : (function () { throw new Twig_Error_Runtime('Variable "resources" does not exist.', 29, $this->getSourceContext()); })()), "data", array()));
            echo "
";
        } else {
            // line 31
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.no_results_to_display");
            echo "
";
        }
        
        $__internal_c3666c7585025c7341670cd9ed1fd2cd3c5a86f58e1c324f4f5df1646d297936->leave($__internal_c3666c7585025c7341670cd9ed1fd2cd3c5a86f58e1c324f4f5df1646d297936_prof);

        
        $__internal_1b7518456f723b1ade394f9132eb9c7f9f53557d09abc6650a38c7846b519416->leave($__internal_1b7518456f723b1ade394f9132eb9c7f9f53557d09abc6650a38c7846b519416_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/Product/Index/_main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  113 => 29,  108 => 27,  103 => 24,  88 => 22,  86 => 21,  83 => 20,  66 => 19,  63 => 18,  61 => 17,  56 => 15,  51 => 12,  49 => 11,  47 => 10,  42 => 8,  39 => 7,  37 => 6,  32 => 4,  29 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}
{% import '@SyliusUi/Macro/pagination.html.twig' as pagination %}

{{ sonata_block_render_event('sylius.shop.product.index.before_search', {'products': resources.data}) }}

{% include '@SyliusShop/Product/Index/_search.html.twig' %}

{{ sonata_block_render_event('sylius.shop.product.index.after_search', {'products': resources.data}) }}

{% include '@SyliusShop/Product/Index/_pagination.html.twig' %}
{% include '@SyliusShop/Product/Index/_sorting.html.twig' %}

<div class=\"ui clearing hidden divider\"></div>

{{ sonata_block_render_event('sylius.shop.product.index.before_list', {'products': resources.data}) }}

{% if resources.data|length > 0 %}
    <div class=\"ui three column stackable grid\" id=\"products\">
        {% for product in resources.data %}
            <div class=\"column\">
                {% include '@SyliusShop/Product/_box.html.twig' %}
            </div>
        {% endfor %}
    </div>
    <div class=\"ui hidden divider\"></div>

    {{ sonata_block_render_event('sylius.shop.product.index.before_pagination', {'products': resources.data}) }}

    {{ pagination.simple(resources.data) }}
{% else %}
    {{ messages.info('sylius.ui.no_results_to_display') }}
{% endif %}
", "@SyliusShop/Product/Index/_main.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\Product\\Index\\_main.html.twig");
    }
}
