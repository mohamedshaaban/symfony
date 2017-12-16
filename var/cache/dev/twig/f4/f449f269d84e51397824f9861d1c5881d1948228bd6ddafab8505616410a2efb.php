<?php

/* @SyliusShop/ProductReview/_list.html.twig */
class __TwigTemplate_cd0791323b6a4fb29b5ca325e86d76abed9b871ee684bcc3648498040259ff9a extends Twig_Template
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
        $__internal_dc4e1c722337a580e35d59836ef54ab676a02b2049d7850601f8efb6f27fb467 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc4e1c722337a580e35d59836ef54ab676a02b2049d7850601f8efb6f27fb467->enter($__internal_dc4e1c722337a580e35d59836ef54ab676a02b2049d7850601f8efb6f27fb467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_list.html.twig"));

        $__internal_60b7a3853e41541fdd44ce6f2fcc9ebd44ab6cf5214ec53436f27760c98e575f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60b7a3853e41541fdd44ce6f2fcc9ebd44ab6cf5214ec53436f27760c98e575f->enter($__internal_60b7a3853e41541fdd44ce6f2fcc9ebd44ab6cf5214ec53436f27760c98e575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SyliusShop/ProductReview/_list.html.twig"));

        // line 1
        $context["messages"] = $this->loadTemplate("@SyliusUi/Macro/messages.html.twig", "@SyliusShop/ProductReview/_list.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if ((twig_length_filter($this->env, (isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 3, $this->getSourceContext()); })())) > 0)) {
            // line 4
            echo "    <div class=\"ui large comments\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["product_reviews"]) || array_key_exists("product_reviews", $context) ? $context["product_reviews"] : (function () { throw new Twig_Error_Runtime('Variable "product_reviews" does not exist.', 5, $this->getSourceContext()); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 6
                echo "            ";
                $this->loadTemplate("@SyliusShop/ProductReview/_single.html.twig", "@SyliusShop/ProductReview/_list.html.twig", 6)->display($context);
                // line 7
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </div>
";
        } else {
            // line 10
            echo "    ";
            echo $context["messages"]->macro_info("sylius.ui.there_are_no_reviews");
            echo "
";
        }
        
        $__internal_dc4e1c722337a580e35d59836ef54ab676a02b2049d7850601f8efb6f27fb467->leave($__internal_dc4e1c722337a580e35d59836ef54ab676a02b2049d7850601f8efb6f27fb467_prof);

        
        $__internal_60b7a3853e41541fdd44ce6f2fcc9ebd44ab6cf5214ec53436f27760c98e575f->leave($__internal_60b7a3853e41541fdd44ce6f2fcc9ebd44ab6cf5214ec53436f27760c98e575f_prof);

    }

    public function getTemplateName()
    {
        return "@SyliusShop/ProductReview/_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 10,  69 => 8,  55 => 7,  52 => 6,  35 => 5,  32 => 4,  30 => 3,  27 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% import '@SyliusUi/Macro/messages.html.twig' as messages %}

{% if product_reviews|length > 0 %}
    <div class=\"ui large comments\">
        {% for review in product_reviews %}
            {% include '@SyliusShop/ProductReview/_single.html.twig' %}
        {% endfor %}
    </div>
{% else %}
    {{ messages.info('sylius.ui.there_are_no_reviews') }}
{% endif %}
", "@SyliusShop/ProductReview/_list.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\Resources\\views\\ProductReview\\_list.html.twig");
    }
}
