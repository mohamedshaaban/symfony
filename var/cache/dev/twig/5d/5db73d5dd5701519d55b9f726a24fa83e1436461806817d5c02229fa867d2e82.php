<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_32b839b1c72235547e1f5f8abb10b63a4b084e4f2bed65cbacae7c7420c24be9 extends Twig_Template
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
        $__internal_0ba2ddd0df164c99afa6182b23db2adc6d54a4f6b1a5111f2eaeb5e8d5c6e57a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ba2ddd0df164c99afa6182b23db2adc6d54a4f6b1a5111f2eaeb5e8d5c6e57a->enter($__internal_0ba2ddd0df164c99afa6182b23db2adc6d54a4f6b1a5111f2eaeb5e8d5c6e57a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_13ef35e035fda08d2e5ec4e03d8cc96ea1f237de721e307d0abc048139c5aee1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13ef35e035fda08d2e5ec4e03d8cc96ea1f237de721e307d0abc048139c5aee1->enter($__internal_13ef35e035fda08d2e5ec4e03d8cc96ea1f237de721e307d0abc048139c5aee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_0ba2ddd0df164c99afa6182b23db2adc6d54a4f6b1a5111f2eaeb5e8d5c6e57a->leave($__internal_0ba2ddd0df164c99afa6182b23db2adc6d54a4f6b1a5111f2eaeb5e8d5c6e57a_prof);

        
        $__internal_13ef35e035fda08d2e5ec4e03d8cc96ea1f237de721e307d0abc048139c5aee1->leave($__internal_13ef35e035fda08d2e5ec4e03d8cc96ea1f237de721e307d0abc048139c5aee1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
