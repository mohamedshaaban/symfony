<?php

/* LiipImagineBundle:Form:form_div_layout.html.twig */
class __TwigTemplate_cc173db3739d3d23534173922a3793d05c7478c4dd1555562e1b1e60ad6f1dc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'liip_imagine_image_widget' => array($this, 'block_liip_imagine_image_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5599f6d93532701911a8d1da1234fa434ecbf3103d09891a839e1312e1128fe9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5599f6d93532701911a8d1da1234fa434ecbf3103d09891a839e1312e1128fe9->enter($__internal_5599f6d93532701911a8d1da1234fa434ecbf3103d09891a839e1312e1128fe9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        $__internal_30528637371eff361f3c2870e404ae72501c4aa45650f6e81c548e26ff76f017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30528637371eff361f3c2870e404ae72501c4aa45650f6e81c548e26ff76f017->enter($__internal_30528637371eff361f3c2870e404ae72501c4aa45650f6e81c548e26ff76f017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LiipImagineBundle:Form:form_div_layout.html.twig"));

        // line 1
        $this->displayBlock('liip_imagine_image_widget', $context, $blocks);
        
        $__internal_5599f6d93532701911a8d1da1234fa434ecbf3103d09891a839e1312e1128fe9->leave($__internal_5599f6d93532701911a8d1da1234fa434ecbf3103d09891a839e1312e1128fe9_prof);

        
        $__internal_30528637371eff361f3c2870e404ae72501c4aa45650f6e81c548e26ff76f017->leave($__internal_30528637371eff361f3c2870e404ae72501c4aa45650f6e81c548e26ff76f017_prof);

    }

    public function block_liip_imagine_image_widget($context, array $blocks = array())
    {
        $__internal_a6f9095e9105d4c84c9a3a5ff1a4164cdce317c0ce255c7df2ba38aaa168c2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6f9095e9105d4c84c9a3a5ff1a4164cdce317c0ce255c7df2ba38aaa168c2cf->enter($__internal_a6f9095e9105d4c84c9a3a5ff1a4164cdce317c0ce255c7df2ba38aaa168c2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        $__internal_a1eefb3bc2c9de05edfa559fe6bfcbe2323c2696df66aef04322f512e24bc515 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1eefb3bc2c9de05edfa559fe6bfcbe2323c2696df66aef04322f512e24bc515->enter($__internal_a1eefb3bc2c9de05edfa559fe6bfcbe2323c2696df66aef04322f512e24bc515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "liip_imagine_image_widget"));

        // line 2
        echo "    ";
        ob_start();
        // line 3
        echo "        ";
        if ((isset($context["image_path"]) || array_key_exists("image_path", $context) ? $context["image_path"] : (function () { throw new Twig_Error_Runtime('Variable "image_path" does not exist.', 3, $this->getSourceContext()); })())) {
            // line 4
            echo "            <div>
                ";
            // line 5
            if ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 5, $this->getSourceContext()); })())) {
                // line 6
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, (((isset($context["link_filter"]) || array_key_exists("link_filter", $context) ? $context["link_filter"] : (function () { throw new Twig_Error_Runtime('Variable "link_filter" does not exist.', 6, $this->getSourceContext()); })())) ? ($this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 6, $this->getSourceContext()); })()), (isset($context["link_filter"]) || array_key_exists("link_filter", $context) ? $context["link_filter"] : (function () { throw new Twig_Error_Runtime('Variable "link_filter" does not exist.', 6, $this->getSourceContext()); })()))) : ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 6, $this->getSourceContext()); })()))), "html", null, true);
                echo "\" ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["link_attr"]) || array_key_exists("link_attr", $context) ? $context["link_attr"] : (function () { throw new Twig_Error_Runtime('Variable "link_attr" does not exist.', 6, $this->getSourceContext()); })()));
                foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\" ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo ">
                ";
            }
            // line 8
            echo "
                <img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Liip\ImagineBundle\Templating\ImagineExtension')->filter((isset($context["image_path"]) || array_key_exists("image_path", $context) ? $context["image_path"] : (function () { throw new Twig_Error_Runtime('Variable "image_path" does not exist.', 9, $this->getSourceContext()); })()), (isset($context["image_filter"]) || array_key_exists("image_filter", $context) ? $context["image_filter"] : (function () { throw new Twig_Error_Runtime('Variable "image_filter" does not exist.', 9, $this->getSourceContext()); })())), "html", null, true);
            echo "\" ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["image_attr"]) || array_key_exists("image_attr", $context) ? $context["image_attr"] : (function () { throw new Twig_Error_Runtime('Variable "image_attr" does not exist.', 9, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\" ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " />

                ";
            // line 11
            if ((isset($context["link_url"]) || array_key_exists("link_url", $context) ? $context["link_url"] : (function () { throw new Twig_Error_Runtime('Variable "link_url" does not exist.', 11, $this->getSourceContext()); })())) {
                // line 12
                echo "                    </a>
                ";
            }
            // line 14
            echo "            </div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_a1eefb3bc2c9de05edfa559fe6bfcbe2323c2696df66aef04322f512e24bc515->leave($__internal_a1eefb3bc2c9de05edfa559fe6bfcbe2323c2696df66aef04322f512e24bc515_prof);

        
        $__internal_a6f9095e9105d4c84c9a3a5ff1a4164cdce317c0ce255c7df2ba38aaa168c2cf->leave($__internal_a6f9095e9105d4c84c9a3a5ff1a4164cdce317c0ce255c7df2ba38aaa168c2cf_prof);

    }

    public function getTemplateName()
    {
        return "LiipImagineBundle:Form:form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  106 => 17,  103 => 16,  99 => 14,  95 => 12,  93 => 11,  76 => 9,  73 => 8,  55 => 6,  53 => 5,  50 => 4,  47 => 3,  44 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block liip_imagine_image_widget %}
    {% spaceless %}
        {% if image_path %}
            <div>
                {% if link_url %}
                    <a href=\"{{ link_filter ? link_url|imagine_filter(link_filter): link_url }}\" {% for attrname, attrvalue in link_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %}>
                {% endif %}

                <img src=\"{{ image_path|imagine_filter(image_filter) }}\" {% for attrname, attrvalue in image_attr %}{{ attrname }}=\"{{ attrvalue }}\" {% endfor %} />

                {% if link_url %}
                    </a>
                {% endif %}
            </div>
        {% endif %}

        {{ block('form_widget_simple') }}
    {% endspaceless %}
{% endblock %}
", "LiipImagineBundle:Form:form_div_layout.html.twig", "D:\\xamppfr\\htdocs\\symfony_sylius\\vendor\\liip\\imagine-bundle/Resources/views/Form/form_div_layout.html.twig");
    }
}
