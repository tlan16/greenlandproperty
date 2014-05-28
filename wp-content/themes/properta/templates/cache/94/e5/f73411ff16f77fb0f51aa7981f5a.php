<?php

/* properties/property-map.twig */
class __TwigTemplate_94e5f73411ff16f77fb0f51aa7981f5a extends Twig_Template
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
        // line 1
        if (($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0) && $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0))) {
            // line 2
            echo "    <h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "__", array(0 => "Map", 1 => "aviators"), "method"), "html", null, true);
            echo "</h2>

    <div id=\"property-map\"></div>

    <script type=\"text/javascript\">
        jQuery(document).ready(function (\$) {
            function LoadMapProperty() {
                var locations = new Array(
                        [";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "]
                );
                var types = new Array(
                        '";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "wp_get_object_terms", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "property_types"), "method"), 0), "slug"), "html", null, true);
            echo "'
                );
                var markers = new Array();
                var plainMarkers = new Array();

                var mapOptions = {
                    center     : new google.maps.LatLng(";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_latitude"), "method"), 0), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_post_meta", array(0 => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID"), 1 => "_property_longitude"), "method"), 0), "html", null, true);
            echo "),
                    zoom       : 14,
                    mapTypeId  : google.maps.MapTypeId.ROADMAP,
                    scrollwheel: false
                };

                var map = new google.maps.Map(document.getElementById('property-map'), mapOptions);

                \$.each(locations, function (index, location) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(location[0], location[1]),
                        map     : map,
                        icon    : '";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["wp"]) ? $context["wp"] : null), "get_template_directory_uri", array(), "method"), "html", null, true);
            echo "/assets/img/marker-transparent.png'
                    });

                    var myOptions = {
                        draggable             : true,
                        content               : '<div class=\"marker ' + types[index] + '\"><div class=\"marker-inner\"></div></div>',
                        disableAutoPan        : true,
                        pixelOffset           : new google.maps.Size(-21, -58),
                        position              : new google.maps.LatLng(location[0], location[1]),
                        closeBoxURL           : \"\",
                        isHidden              : false,
                        // pane: \"mapPane\",
                        enableEventPropagation: true
                    };
                    marker.marker = new InfoBox(myOptions);
                    marker.marker.isHidden = false;
                    marker.marker.open(map, marker);
                    markers.push(marker);
                });

                google.maps.event.addListener(map, 'zoom_changed', function () {
                    \$.each(markers, function (index, marker) {
                        marker.infobox.close();
                    });
                });
            }

            google.maps.event.addDomListener(window, 'load', LoadMapProperty);

            var dragFlag = false;
            var start = 0, end = 0;

            function thisTouchStart(e) {
                dragFlag = true;
                start = e.touches[0].pageY;
            }

            function thisTouchEnd() {
                dragFlag = false;
            }

            function thisTouchMove(e) {
                if (!dragFlag) return;
                end = e.touches[0].pageY;
                window.scrollBy(0, ( start - end ));
            }

            document.getElementById(\"property-map\").addEventListener(\"touchstart\", thisTouchStart, true);
            document.getElementById(\"property-map\").addEventListener(\"touchend\", thisTouchEnd, true);
            document.getElementById(\"property-map\").addEventListener(\"touchmove\", thisTouchMove, true);
        });

    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "properties/property-map.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 10,  59 => 13,  45 => 11,  42 => 10,  38 => 9,  35 => 8,  25 => 4,  21 => 2,  217 => 84,  210 => 80,  204 => 77,  200 => 75,  198 => 74,  195 => 73,  188 => 70,  184 => 69,  181 => 68,  179 => 67,  176 => 66,  173 => 65,  167 => 62,  163 => 61,  160 => 60,  157 => 59,  155 => 58,  152 => 57,  149 => 56,  143 => 53,  136 => 51,  133 => 50,  131 => 49,  121 => 45,  117 => 43,  111 => 40,  104 => 38,  102 => 37,  96 => 34,  92 => 33,  88 => 31,  83 => 28,  80 => 27,  74 => 25,  66 => 15,  60 => 20,  48 => 15,  37 => 11,  32 => 9,  24 => 4,  19 => 1,  93 => 19,  85 => 28,  72 => 24,  69 => 20,  67 => 31,  64 => 18,  61 => 17,  53 => 17,  44 => 12,  41 => 13,  39 => 10,  36 => 9,  34 => 8,  29 => 5,  26 => 4,  20 => 1,  144 => 51,  139 => 52,  132 => 44,  130 => 43,  125 => 46,  123 => 39,  116 => 34,  114 => 33,  107 => 39,  89 => 30,  86 => 23,  82 => 27,  78 => 19,  75 => 22,  58 => 19,  50 => 19,  40 => 5,  31 => 7,  28 => 3,);
    }
}
